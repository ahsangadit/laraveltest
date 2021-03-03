<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Cache;

class TestController extends Controller
{
    public function put_data_cache()
    {
        $country_log = [];
        $countries = [];
        $logs = \App\Test::get();
        $num = 1;
        foreach($logs as $val){
             $get_para = json_decode($val->params,TRUE);
             $log_value[$get_para['geolocation']['display']][$val->ended_at_date][]= $get_para['geolocation']['display'];
        }
        Cache::put('logvalue',$log_value, 5000);
    }

    public function get_data_cache($name)
    {
       $log_value = Cache::get('logvalue');
       foreach($log_value[$name] as $key => $val){
         $value[$key] = count($val);
       }
       var_dump($value);
    }
}
