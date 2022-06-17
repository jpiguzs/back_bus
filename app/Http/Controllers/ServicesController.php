<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServicesController extends Controller
{
    //
    public function GetAvailabilityByRouteId( Request $request){
        //es por servicos no por rutas
        $routes_ids= isset($request->routes_ids) ?  json_decode($request->routes_ids) : null;
        $services = Service::whereIn('external_route_id', function($query) use ($request){
            $routes_ids = isset($request->routes_ids) ?  json_decode($request->routes_ids) : null;
            if(is_null($routes_ids)){
                return $query->select('external_id')->from('routes');
            }else {
               return $query->select('external_id')->from('routes')->whereIn('id',$routes_ids);
            }
            
        })->selectRaw('SUM(capacity - confirmed_pax_count ) as 
        available, external_route_id ')->groupBy('external_route_id')->get();
        
        return  response()->json($services , 200);  
    }
}
