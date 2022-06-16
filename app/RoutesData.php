<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoutesData extends Model
{
    //
    protected $table = 'routes_data';
    protected $fillable =[
        
		"route_id",
		"calendar_id",
		"vinculation_route",
		"route_circular",
		"date_init",
		"date_finish",
		"mon",
		"tue",
		"wed",
		"thu",
		"fri",
		"sat",
		"sun",
		
    ];

	public function Calendar(){
		return $this->belongsTo(Calendar::class, 'calendar_id');
	}
	public function Route(){
		return $this->belongsTo(Route::class, 'route_id');
	}
}
