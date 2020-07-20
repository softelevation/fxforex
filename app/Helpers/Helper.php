<?php 
use Illuminate\Support\Facades\DB;
use App\ActivityPointsLogs;

    if (!function_exists('getCountry')) {
    
        function getCountry()
        {
            try { 
                $get = DB::table('countries')->select('*')->get();

            } catch(\Illuminate\Database\QueryException $ex){ 
                dd($ex->getMessage()); 
            }
            return $get;
        }
    }


    if (!function_exists('getCountryByid')) {
    
        function getCountryByid($id)
        {
            try { 
                $get = DB::table('countries')->select('*')->where('code',$id)->first();

            } catch(\Illuminate\Database\QueryException $ex){ 
                dd($ex->getMessage()); 
            }
            return $get;
        }
    }
    
    if (!function_exists('get_agent')) {
    
        function get_agent()
        {
            try { 
                $get = DB::table('users')->select('*')->where('role','users')->where('status',1)->get();

            } catch(\Illuminate\Database\QueryException $ex){ 
                dd($ex->getMessage()); 
            }
            return $get;
        }
    }
    if (!function_exists('get_assigned_client')) {
    
        function get_assigned_client($id)
        {
            try { 
                $data = DB::table('agents')->select('client_ids')->where('role','agent')->where('id',$id)->first();
                $new_val = explode(',',$data->client_ids);
                $res = array();
                foreach($new_val as $ids){
                    $res[] = DB::table('users')->select('*')->where('role','users')->where('status',1)->where('id',$ids)->first();
                };
            } catch(\Illuminate\Database\QueryException $ex){ 
                dd($ex->getMessage()); 
            }
            return $res;
        }
    }
    
?>