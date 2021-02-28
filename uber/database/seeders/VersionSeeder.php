<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Version;


class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Version::create([
         'name' => 'Ibiza',
         'description' => '1.4TDI',
         'brand_id' => 1
      ]);

      Version::create([
         'name' => 'Uno',
         'description' => '1.2',
         'brand_id' => 2
      ]);

      Version::create([
         'name' => 'Corolla',
         'description' => 'Sol 1.6',
         'brand_id' => 3
      ]);

      Version::create([
         'name' => 'Yaris',
         'description' => 'TD 90',
         'brand_id' => 3
      ]);

      Version::create([
         'name' => 'A3 Sportback',
         'description' => 'Advanced 1.6 TDI',
         'brand_id' => 4
      ]);

      Version::create([
         'name' => 'Touran',
         'description' => '1.5 TSI',
         'brand_id' => 5
      ]);

    }
}
