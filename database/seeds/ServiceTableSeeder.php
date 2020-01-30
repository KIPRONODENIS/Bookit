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
        Service::create(['name'=>'Gym Services','user_id'=>1])->hotels()->sync([1,2,4]);
        Service::create(['name'=>'Room Event Reservation','user_id'=>1])->hotels()->sync([1,2,3]);
        Service::create(['name'=>'Bed and Breakfast reservation','user_id'=>1])->hotels()->sync([1,2,3]);
        Service::create(['name'=>'Conference & meeting','user_id'=>1])->hotels()->sync([1,2,4]);
        Service::create(['name'=>'Logding rentals','user_id'=>1])->hotels()->sync([1,2,5]);
        Service::create(['name'=>'Catering services','user_id'=>1])->hotels()->sync([1,2,3]);
    }
}
