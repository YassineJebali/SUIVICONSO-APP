<?php

namespace Database\Factories;

use App\Models\Counter;
use Illuminate\Database\Eloquent\Factories\Factory;

class CounterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Counter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word,
            'serial_number' => $this->faker->unique()->numerify('SN-######'),
            'local_id' => $this->faker->randomDigitNotNull,
            'avg_consommation' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}