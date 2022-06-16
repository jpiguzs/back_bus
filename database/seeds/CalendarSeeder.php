<?php

use Illuminate\Database\Seeder;
use App\Calendar;
class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/calendar.json";
        $json = json_decode(file_get_contents($path), true); 
        $calendars = $json['calendar'];
        foreach ($calendars as $calendar) {
            # code...

            Calendar::create($calendar);
        }
    }
}
