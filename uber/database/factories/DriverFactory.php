<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo_path' => $this->faker->url(),
            'hire_date' => $this->faker->date(),
            'total_rides' => $this->faker->randomNumber(2),
            'bank_account' => $this->faker->creditCardNumber(),
            'rating' => $this->faker->text(150),
        ];
    }
}
