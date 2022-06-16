<?php

use Illuminate\Database\Seeder;
use App\CalendarDayDisabled;
class DaysDisabledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/calendar_days_disabled.json";
        $json = json_decode(file_get_contents($path), true); 
        $calendar_days_disables = $json['calendar_days_disabled'];
        foreach ($calendar_days_disables as $calendar_days_disabled) {
            # code...

            CalendarDayDisabled::create($calendar_days_disabled);
        }
    }
}
