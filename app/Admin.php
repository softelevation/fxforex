<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    static function getLogUserList(){
        try {
            $get = DB::table('users')
            ->select(
                DB::raw("(select count(id) from users where role = 'users' ) as client_count"),
                DB::raw("(select count(id) from agents where role = 'agent' ) as agent_count")
            )->first();
           
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage()); 
        }
        return $get;
    }

    static function getAllUserList(){
        try {
            $get = DB::table('users')->where('role','users')->get();
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage()); 
        }
        return $get;   
    }

    static function getListById($id){
        try {
            $get = DB::table('users')->where(['id'=>$id,'role'=>'users'])->first();
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage()); 
        }
        return $get;   
    }

    static function listactive($id,$status){
        try {
            $res = array('status'=>$status);
            $res_data = DB::table('users')->where('id',$id)->update($res);
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage()); 
        }
        return $res_data;   
        
    }

    static function updateUsers($id,$array){       
        try {
            $get =  DB::table('users')
            ->where('id', $id)
            ->update($array);
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage()); 
        }
        return $get;   
    }
}
