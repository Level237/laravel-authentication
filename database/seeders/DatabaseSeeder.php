<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::factory(25)->create();
        \App\Models\tag::factory(10)->hasAttached(
            [
                post::factory(6),
            \App\Models\article::factory(6)
            ]


        )->create();
    }
}
