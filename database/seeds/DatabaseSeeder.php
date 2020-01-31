<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $this->call(UsersTableSeeder::class);
       $this->call(ServiceTableSeeder::class);
       $this->call(HotelTableSeeder::class);

    }
}