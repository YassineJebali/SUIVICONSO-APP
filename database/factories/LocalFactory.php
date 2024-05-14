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
            'region_id' => Region::factory(),
            'user_id' => User::factory(),
            'local_family_id' => Local_Family::factory(),
            // Add other fields here. For example:
            // 'field_name' => $this->faker->word,
        ];
    }
}