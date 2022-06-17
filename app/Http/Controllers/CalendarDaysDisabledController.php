<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalendarDaysDisabled;
class CalendarDaysDisabledController extends Controller
{
    //
    public function getDaysByRouteId(Request $request){
        $days_disabled = CalendarDaysDisabled::whereIn('calendar_id', function ($query) use ($request){
            $query->select('id')->from('calendar')->whereIn('id', function ($query2) use ($request){
                $query2->select('calendar_id')->from('routes_data')->whereIn('route_id', $request->routes_ids);
            });
        }) ;  
    }
}
