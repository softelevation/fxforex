<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agent extends Model
{
    static function saveAgent($array){
        try {
            $get =  DB::table('agents')->insert(
                $array
            );
        } catch(\Illuminate\Database\QueryException $ex){ 
            return $res = array(
                'message' => 'Email is already taken',
                'code' =>   302 
            );
        }
        return $get;  
    }

    static function getAgents(){
        try {
            $get =  DB::table('agents')->get();
        } catch(\Illuminate\Database\QueryException $ex){ 
          
        }
        return $get; 
    }

    static function getAgentsById($id){
        try {
            $get =  DB::table('agents')->where('id',$id)->first();
        } catch(\Illuminate\Database\QueryException $ex){ 
          
        }
        return $get; 
    }

    static function listactiveAgent($id,$status){
        try {
            $res = array('status'=>$status);
            $res_data = DB::table('agents')->where('id',$id)->update($res);
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage()); 
        }
        return $res_data;  
    }
}
 