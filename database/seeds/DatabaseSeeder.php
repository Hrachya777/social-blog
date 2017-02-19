<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        $this->call(MainAdminTableSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(SportSeeder::class);
        $this->call(InterestSeeder::class);
        Model::reguard();

    }
}
