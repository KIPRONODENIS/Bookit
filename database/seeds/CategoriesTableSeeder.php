<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>"Gym Services",

      ])->hotels()->sync([1,2,4]);

        Category::create(['name'=>"Lodging renting",

      ])->hotels()->sync([1,2,4]);
        Category::create(['name'=>"Table Booking",

      ])->hotels()->sync([1,2,4]);
        Category::create(['name'=>"Hall Booking",

      ])->hotels()->sync([1,2,4]);
    }
}
