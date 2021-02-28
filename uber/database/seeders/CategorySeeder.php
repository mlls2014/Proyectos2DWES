<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      Category::create([
         'name' => 'UberX',
         'minimum' => '12',
         'per_minute' => '0.45',
      ]);

      Category::create([
         'name' => 'Black',
         'minimum' => '8',
         'per_minute' => '0.4',
      ]);

      Category::create([
         'name' => 'Van',
         'minimum' => '14',
         'per_minute' => '0.8',
      ]);

      Category::create([
         'name' => 'Taxi',
         'minimum' => '5',
         'per_minute' => '0.9',
      ]);
   }
}
