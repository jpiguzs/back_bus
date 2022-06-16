<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //
    protected $fillable = [
     
		"external_id" ,
		"invitation_code",
		"title",
		"start_timestamp",
		"end_timestamp"
    ];
	protected $appends = ['capacity'];
	
	public function Services(){
		return $this->hasMany(Service::class, 'external_route_id', 'external_id');
	}
	public function Reserversions(){
		return $this->hasMany(Reserversion::class);
	}
	public function RouteDatas(){
		return  $this->hasMany(RouteData::class);
	}
	
	public function getCapacityAttribute(){
		$capacity = 0;
		$services = Service::where('external_route_id', $this->external_id)->get();
		foreach ($services as $service ) {
			$capacity = $service->capacity - $service->confirmed_pax_count;
		}
		return $capacity;
	}
}
