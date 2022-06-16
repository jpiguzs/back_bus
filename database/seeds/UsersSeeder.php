<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/json/users.json";
        $json = json_decode(file_get_contents($path), true); 
        $users = $json['users'];
        foreach ($users as $user) {
            # code...

            User::create($user);
        }
        //
    }
}
