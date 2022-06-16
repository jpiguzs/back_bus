<?php

use Illuminate\Database\Seeder;
use App\RoutesData;
class RouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/route_data.json";
        $json = json_decode(file_get_contents($path), true); 
        $router_datas = $json['routes_data'];
        foreach ($router_datas as $datas) {
            # code...

            RoutesData::create($datas);
        }
        
    }
}
