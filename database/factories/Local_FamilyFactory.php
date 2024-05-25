<?php

namespace Database\Factories;

use App\Models\Local_Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class Local_FamilyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Local_Family::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'parent_id' => $this->faker->randomDigitNotNull,
        ];
    }
}