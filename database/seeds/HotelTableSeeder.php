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
        factory(\App\Hotel::class,5)->create()->each(function($hotel){
          $hotel->services()->syncWithoutDetaching([1=>[
            'price_per_hour'=>200
          ],2=>[
            'price_per_hour'=>250
          ],3=>[
            'price_per_hour'=>150
            ]]);
        });
        factory(\App\Hotel::class,5)->create(['location'=>"Nakuru"])->each(function($hotel){
          $hotel->services()->syncWithoutDetaching([2=>[
            'price_per_hour'=>300
            ]]);
        });
        factory(\App\Hotel::class,5)->create(['location'=>"Naivasha"])->each(function($hotel){
          $hotel->services()->syncWithoutDetaching([3=>[
            'price_per_hour'=>140
          ],2=>[
            'price_per_hour'=>430
            ]]);
        });;
      //  factory(\App\Hotel::class,5)->create(['location'=>"Meru"]);
    }
}
