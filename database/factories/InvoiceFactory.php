<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'issue_date' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'payment_status' => $this->faker->randomElement(Invoice::$PAYMENT_STATUSES),
            'period' => $this->faker->randomElement(Invoice::$PERIODS),
            'local_id' => \App\Models\Local::factory(),
            'counter_id' => \App\Models\Counter::factory(),
        ];
    }
}