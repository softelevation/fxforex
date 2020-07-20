<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;

class AdminController extends Controller
{
   
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // 
    }

    public function dashboard(){
        $res = Admin::getLogUserList();
        return view('admin.dashboard_new', compact('res'));
    } 

    public function users_listing(){
        $res = Admin::getAllUserList();
        return view('admin.dashboard.users_listing',compact('res'));
    }

    public function edit_users_listing($id){
        if(isset($_REQUEST['update_users']) && $_REQUEST['update_users'] > 0){ 
            $array = [
                'name'=>isset($_REQUEST['name'])?$_REQUEST['name']:'',
                'second_name'=>isset($_REQUEST['second_name'])?$_REQUEST['second_name']:'',
                'phone'=>isset($_REQUEST['phone'])?$_REQUEST['phone']:'',
                'dob'=>isset($_REQUEST['dob'])?$_REQUEST['dob']:'',
                'gender'=>isset($_REQUEST['gender'])?$_REQUEST['gender']:'',
                'citizenship'=>isset($_REQUEST['citizenship'])?$_REQUEST['citizenship']:'',
                'do_not_call'=>isset($_REQUEST['do_not_call'])?$_REQUEST['do_not_call']:'',
                'do_not_sms'=>isset($_REQUEST['do_not_sms'])?$_REQUEST['do_not_sms']:'',
                'do_not_email'=>isset($_REQUEST['do_not_email'])?$_REQUEST['do_not_email']:''
            ];
            $res = Admin::updateUsers($_REQUEST['update_users'],$array);
            return redirect("/users_listing/".$_REQUEST['update_users'])->with('Success', 'Successfully Updated.');
        }

        $res = Admin::getListById($id);
        return view('admin.dashboard.edit_users_listing',compact('res'));
    }

    public function view_users_listing($id){
        $res = Admin::getListById($id);
        return view('admin.dashboard.view_users_listing',compact('res'));
    }

    public function listactive($id,$status){
        $res = Admin::listactive($id,$status);
        if($res){
            return back()->with('message', 'Users Updated Successfully.');
         }
    }

    public function trading(){
        return view('admin.dashboard.trading'); 
    }

    public function changePass(Request $request){
        if(isset($_POST) && !empty($_POST)){

            if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
                return redirect()->back()->with("message","Your current password does not matches with the password you provided. Please try again.");
            }
    
            if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
                return redirect()->back()->with("message","New Password cannot be same as your current password. Please choose a different password.");
            }

            if($request->get('new_password') != $request->get('password_confirm') ){
                return redirect()->back()->with("message","New Password And Confirm Password Not Same.");
            }
          
            //Change Password
            $user = Auth::user();
            $user->password = Hash::make($request->get('new_password'));
            $user->save();
            return redirect()->back()->with("message","Successfully Updated.");

            //return redirect("/changePass")->with('Success', 'Successfully Updated.');
        }
        return view('admin.dashboard.change_password'); 
    }
}
