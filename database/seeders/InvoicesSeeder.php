<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\Local;
use App\Models\Counter;
use Illuminate\Database\Seeder;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['gas', 'water', 'electricity'];

        Local::all()->each(function ($local) use ($types) {
            foreach ($types as $type) {
                $counter = Counter::factory()->state([
                    'type' => $type,
                    'local_id' => $local->id,
                ])->create();

                Invoice::factory()->count(12)->state([
                    'local_id' => $local->id,
                ])->create()->each(function ($invoice) use ($counter) {
                    $invoice->counters()->attach($counter->id);
                });
            }
        });
    }
}