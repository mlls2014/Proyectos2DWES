<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuDrivers =  User::whereIn('type', ['C', 'A'])->get();
        foreach ($usuDrivers as $user) {
            Driver::factory()->create(
                [
                    'id' => $user->id
                ]
            );



        }
    }
}
