<?php

namespace App\Http\Controllers;
use App\Route;
use App\Service;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function Index( Request $request){
        //es por servicos no por rutas
        $routes_ids= isset($request->routes_ids) ?  json_decode($request->routes_ids) : null;
        $services = Service::wherIn('external_route_id', function($query) use ($request){
            $routes_ids = isset($request->routes_ids) ?  json_decode($request->routes_ids) : null;
            if(is_null($routes_ids)){
                return;
            }else {
                $query->select('external_id')->from('routes')->whereIn('id',$routes_ids);
            }
            
        });
        
        return  response()->json($routes, 200);  
    }
}
