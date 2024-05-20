<?php

namespace Database\Factories;

use App\Models\Counter;
use App\Models\Local;
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
        $types = ['gas','water','electricity'];

        return [
            'type' => $this->faker->randomElement($types),
            'serial_number' => $this->faker->unique()->numerify('SN-#######'),
            'local_id' => Local::all()->random()->id,
            'avg_consumption' => $this->faker->randomFloat(2, 0, 500),
        ];
    }
}