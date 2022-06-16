<?php

use Illuminate\Database\Seeder;
use App\Reservation;
class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/reservations.json";
        $json = json_decode(file_get_contents($path), true); 
        $reservations = $json['reservations'];
        foreach ($reservations as $reservation) {
            # code...

            Reservation::create($reservation);
        }
    }
        
    }

