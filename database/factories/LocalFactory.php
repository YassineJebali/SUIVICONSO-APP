<?php

namespace Database\Factories;

use App\Models\Local;
use App\Models\Region;
use App\Models\User;
use App\Models\Local_Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Local::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'region_id' => Region::all()->random()->id,
            'family_local_id' => Local_Family::all()->random()->id,
            'longitude' => $this->faker->longitude,
            'altitude' => $this->faker->latitude, // assuming altitude is similar to latitude
        ];
    }
}