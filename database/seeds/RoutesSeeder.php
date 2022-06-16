<?php

use Illuminate\Database\Seeder;
use App\Route;
class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/routes.json";
        $json = json_decode(file_get_contents($path), true); 
        $routes = $json['routes'];
        foreach ($routes as $route) {
            # code...

            Route::create($route);
        }
    }
}
