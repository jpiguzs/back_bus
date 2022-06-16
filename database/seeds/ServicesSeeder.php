<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/services.json";
        $json = json_decode(file_get_contents($path), true); 
        $services = $json['services'];
        foreach ($services as $service) {
            # code...

            Service::create($service);
        }
    }
}
