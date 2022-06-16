<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable =[
    
		"user_plan_id",
		"route_id",
		"track_id" ,
		"reservation_start",
		"reservation_end",
		"route_stop_origin_id",
		"route_stop_destination_id",
		"created_at" ,
		"updated_at" ,
		"deleted_at" 
    ];

	public function UserPlan(){
		return $this->belongsTo(UserPlan::class, 'user_plan_id');
	}
	public function Route(){
		return $this->belongsTo(Route::class,'route_id');
	}
}
