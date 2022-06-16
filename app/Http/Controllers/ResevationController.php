<?php

namespace App\Http\Controllers;
use App\Reservation;
use Illuminate\Http\Request;

class ResevationController extends Controller
{
    //
    public function GetReservationsByUserId($user_id, Request $request){
        $reservations = Reservation::whereHas('UserPlan',function ($query) use ($user_id) {
            return $query->where('user_id',$user_id);
        }
        
        )->where( function($query) use ($request){
            $from = isset($request->from) ? date($request->from): null;
            $to =  isset($request->to)?  date($request->to) : null;
            $date= isset($request->date) ?  date($request->date) : null;
            echo $to;
            if(is_null($date)){
                if(is_null($to) or is_null($from)){
                    return;
                } else {
                    return $query->whereBetween('reservation_start',[$from, $to]);
                }
            } else {
                return $query->where('reservation_start', $date);
            
            }
               
           
            // return $query->whereBetween('reservation_start',[$from, $to]);
            
        })->get();
        return response()->json($reservations, 200 );

    }
}
