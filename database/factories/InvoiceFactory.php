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
         $issue_date = $this->faker->dateTimeBetween('2020-01-01', 'now')->format('Y-m-d');
         $date = date('Y-m-d', strtotime("+1 week", strtotime($issue_date)));
         $due_date = date('Y-m-d', strtotime("+2 months", strtotime($issue_date)));
         $pleasePayBefore = date('Y-m-d', strtotime("+20 days", strtotime($due_date)));
         $nextIndexReading = date('Y-m-d', strtotime("+2 months", strtotime($due_date)));
     
         return [
             'date' => $date,
             'issue_date' => $issue_date,
             'due_date' => $due_date,
             'nextIndexReading' => $nextIndexReading,
             'pleasePayBefore' => $pleasePayBefore,
             'consumption' => $this->faker->randomFloat(2, 0, 500),
             'amount' => $this->faker->randomFloat(2, 0, 500),
             'payment_status' => $this->faker->randomElement(Invoice::$PAYMENT_STATUSES),
             'period' => $this->faker->randomElement(Invoice::$PERIODS),
             'reference' => $this->faker->unique()->numerify('INV#####'),
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