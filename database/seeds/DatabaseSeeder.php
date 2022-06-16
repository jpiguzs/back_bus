<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(RoutesSeeder::class);
        $this->call(CalendarSeeder::class);
        $this->call(DaysDisabledSeeder::class);
        $this->call(RouteDataSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(UserPlanSeeder::class);
        $this->call(ReservationsSeeder::class);
    }
}
