<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Ride;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class RideSeeder extends Seeder
{
    protected $drivers;
    protected $customers;
    protected $vehicles;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fetchRelations();

        // Creo 20 rides
        for ($i = 1; $i <= 20; $i++) {
            $ride = new Ride();

            $ride->driver_id = $this->drivers->random()->id;
            // Aseguro que el customer no coincide con el driver
            for (
                $aux = $this->customers->random()->id;
                $ride->driver_id == $aux;
                $aux = $this->customers->random()->id
            );
            $ride->customer_id = $aux;
            $ride->vehicle_id = $this->vehicles->random()->id;
            $ride->fee = intdiv(rand(0, 200), 10);
            $ride->canceled = rand(0, 1);
            $ride->date = now()->subDays(rand(1, 365));
            $ride->save();
        }
    }

    protected function fetchRelations()
    {
        $this->drivers = Driver::all();
        $this->customers = Customer::all();
        $this->vehicles = Vehicle::all();
    }
}
