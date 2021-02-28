<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            'version_id' => 1,
            'category_id' => 2,
            'plate' => 'CA3456G',
            'color' => 'amarillo',
            'seats' => 5
        ]);

        Vehicle::create([
            'version_id' => 2,
            'category_id' => 2,
            'plate' => '3456BM',
            'color' => 'corinto',
            'seats' => 5
        ]);

        Vehicle::create([
            'version_id' => 3,
            'category_id' => 1,
            'plate' => '8765BZB',
            'color' => 'marengo',
            'seats' => 5
        ]);

        Vehicle::create([
            'version_id' => 4,
            'category_id' => 4,
            'plate' => '5790HDC',
            'color' => 'plata',
            'seats' => 5
        ]);

        Vehicle::create([
            'version_id' => 5,
            'category_id' => 3,
            'plate' => '1111JRH',
            'color' => 'blanco',
            'seats' => 5
        ]);

        Vehicle::create([
            'version_id' => 6,
            'category_id' => 4,
            'plate' => '9999KTZ',
            'color' => 'blanco',
            'seats' => 7
        ]);

    }
}
