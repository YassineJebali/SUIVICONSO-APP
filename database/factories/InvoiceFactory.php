<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Local;
use App\Models\Counter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
             'date' => $this->faker->date,
             'issue_date' => $this->faker->date,
             'due_date' => $this->faker->date,
             'nextIndexReading' => $this->faker->date,
             'pleasePayBefore' => $this->faker->date,
             'consumption' => $this->faker->randomFloat(2, 0, 500),
             'amount' => $this->faker->randomFloat(2, 0, 500),
             'payment_status' => $this->faker->randomElement(Invoice::$PAYMENT_STATUSES),
             'period' => $this->faker->randomElement(Invoice::$PERIODS),
             'reference' => $this->faker->unique()->numerify('INV#####'),
             // other fields...
         ];
     }

public function configure()
{
    return $this->afterCreating(function (Invoice $invoice) {
        // $counter = $invoice->local->counters->random(); // Remove this line

        // DB::table('counter_invoice')->insert([ // Remove this block
        //     'counter_id' => $counter->id,
        //     'invoice_id' => $invoice->id,
        //     'reading_date' => now(), 
        // ]);
    });
}
}