<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Brand::create([
         'name' => 'Seat'
      ]);

      Brand::create([
         'name' => 'Fiat'
      ]);

      Brand::create([
         'name' => 'Toyota'
      ]);

      Brand::create([
         'name' => 'Audi'
      ]);

      Brand::create([
         'name' => 'VolksWagen'
      ]);
    }
}
