<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    //
    protected $table = 'calendar';
    protected $fillable =[
     
		"calendar_id",
		"name" ,
		
    ];
    public function DisabledDays(){
        return $this->hasMany(CalendarDayDisabled::class);
    }
}
