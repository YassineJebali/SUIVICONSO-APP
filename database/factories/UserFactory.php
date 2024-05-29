<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Local;
use App\Models\Role;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'password' => bcrypt('password'), // password
            'role_id' => Role::all()->random()->id, // Random role_id from existing roles
            'local_id' => Local::all()->random()->id, // Assuming 1 is a valid role_id
            // 'remember_token' => Str::random(10),
        ];
    }
}