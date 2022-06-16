<?php

namespace App\Http\Controllers;
use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function Index( Request $request){
        //es por servicos no por rutas
        $routes_ids= isset($request->routes_ids) ?  json_decode($request->routes_ids) : null;
        $routes = null;
        if (is_null($routes_ids)){
            $routes =Route::with('Capacity')->get();
        }else {
            $routes = Route::whereIn('id', $routes_ids)->get();
        }
        
        return  response()->json($routes, 200);  
    }
}
