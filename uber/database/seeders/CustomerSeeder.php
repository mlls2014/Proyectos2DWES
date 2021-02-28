<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuCustomers = User::whereIn('type', ['C', 'A'])->get();
        //Usamos un Factory de Customer 
        foreach ($usuCustomers as $user) {
            Customer::factory()->create(
                [
                    'id' => $user->id
                ]
            );
        }
    }
}
