<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarDayDisabled extends Model
{
    //
    protected $table = 'days_disabled';
    protected $fillable = [

		"calendar_id",
		"day",
		"enabled",
		
    ];
    public function Calendar(){
      return $this->belongsTo(Calendar::class, 'calendar_id');
    }
}
