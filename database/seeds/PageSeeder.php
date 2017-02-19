<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [];
        $pages[] = ['page' => 'sport'];
        $pages[] = ['page' => 'news'];
        $pages[] = ['page' => 'games'];
        $pages[] = ['page' => 'interes'];

        foreach ($pages as $page) {
            Page::insert([
                $page
            ]);
        }
    }
}
