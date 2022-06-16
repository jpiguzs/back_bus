<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function GetReservationsByUserId(){
        $user = User::with('UserPlan.Reservations')->get();
        return response()->json($user, 200 );

    }
}
