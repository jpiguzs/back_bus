<?php

use Illuminate\Database\Seeder;
use App\UserPlan;
class UserPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = storage_path() . "/json/user_plans.json";
        $json = json_decode(file_get_contents($path), true); 
        $user_plans = $json['user_plans'];
        foreach ($user_plans as $user_p) {
            # code...

            UserPlan::create($user_p);
        }
    }
}
