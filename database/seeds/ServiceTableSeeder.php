<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        Service::create(['name'=>'Gym Services','user_id'=>1])->hotels()->syncWithoutDetaching([1=>[
          'price_per_hour'=>180
        ],2=>[
          'price_per_hour'=>250
        ],3=>[
          'price_per_hour'=>100
          ]]);
        Service::create(['name'=>'Logding Booking','user_id'=>1]);
        Service::create(['name'=>'Restautrant Dinner & lunch booking','user_id'=>1]);


}
}
