<?php

use Illuminate\Database\Seeder;
use App\User;


class MainAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $admins[] = [
            "firstname"=>"Main Admin",
            "role"=>"main-admin",
            "email"=>"admin@mail.ru",
            "password"=>bcrypt('a')
        ];

        foreach ($admins as $key=>$admin) {
			User::insert([
				$admin
			]);
		}
    }
}
