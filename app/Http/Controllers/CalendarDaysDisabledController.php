<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalendarDayDisabled;
class CalendarDaysDisabledController extends Controller
{
    //
    public function GetDaysByRouteId(Request $request){
        $days_disabled = CalendarDayDisabled::whereIn('calendar_id', function ($query) use ($request){
            $routes_ids = isset($request->routes_ids) ?  json_decode($request->routes_ids) : null;
            if(is_null($routes_ids)){
                $query->select('id')->from('calendar');
            }else{
                $query->select('id')->from('calendar')->whereIn('id', function ($query2) use ($routes_ids){
                    $query2->select('calendar_id')->from('routes_data')->whereIn('route_id', $routes_ids);
                });
            }
          
        })->get() ;  
        return response()->json($days_disabled,200);
    }
}
