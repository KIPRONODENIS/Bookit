<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Hotel::class,5)->create();
        factory(\App\Hotel::class,5)->create(['location'=>"Nakuru"]);
        factory(\App\Hotel::class,5)->create(['location'=>"Naivasha"]);
        factory(\App\Hotel::class,5)->create(['location'=>"Meru"]);
    }
}
