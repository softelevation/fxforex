<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    public function agent_listing(){
        $res = Agent::getAgents();
        return view('admin.dashboard.agent_listing',compact('res',$res) );
    }

    public function agent_full_info($id){
        $res = Agent::getAgentsById($id);
        return view('admin.dashboard.agent_full_info',compact('res',$res) );
    }

    public function listactiveAgent($id,$status){
        $res = Agent::listactiveAgent($id,$status);
        if($res){
            return back()->with('message', 'Agent Updated Successfully.');
        }
    }

    public function edit_agent($id){
        $res = Agent::getAgentsById($id);
        return view('admin.dashboard.add_agent',compact('res',$res) );
    }

    public function add_agent(){
        if(isset($_POST) && !empty($_POST)){
               
                if(isset($_POST['client_id']))
                {
                    $client_id = array();
                    foreach($_POST['client_id'] as $val)
                    {
                        $client_id[] = (int) $val;
                    }
                    $client_id = implode(',', $client_id);

                    try {  
                        $array = [
                            'first_name'=>isset($_REQUEST['first_name'])?$_REQUEST['first_name']:'',
                            'last_name'=>isset($_REQUEST['last_name'])?$_REQUEST['last_name']:'',
                            'phone'=>isset($_REQUEST['phone'])?$_REQUEST['phone']:'',
                            'email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'',
                            'client_ids'=>$client_id,
                            'created_at'=>date("Y-m-d H:i:s")
                        ];   
                        $res = Agent::saveAgent($array);
                      
                    }catch(\Exception $e){       
                       return redirect("/add_agent")->with('message', $e->getMessage());
                    } 
                    if(isset($res['code']) && $res['code'] == 302){
                        return redirect("/add_agent")->with('message', $res['message']);
                    }else{
                        return redirect("/add_agent")->with('message', 'Inserted successfully.');
                    }
                }
            
        }
        return view('admin.dashboard.add_agent');
    }
}