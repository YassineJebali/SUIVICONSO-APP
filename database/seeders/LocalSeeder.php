<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Local;
use App\Models\Counter;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['gas', 'water', 'electricity'];

        Local::factory()->count(6)->create()->each(function ($local) use ($types) {
            foreach ($types as $type) {
                $counter = $local->counters()->save(
                    Counter::factory()->state([
                        'type' => $type,
                        'local_id' => $local->id,
                    ])->make()
                );

                Invoice::factory()->count(20)->state([
                    'local_id' => $local->id,
                ])->create()->each(function ($invoice) use ($counter) {
                    DB::table('counter_invoice')->insert([
                        'counter_id' => $counter->id,
                        'invoice_id' => $invoice->id,
                        'reading_date' => now(), 
                    ]);
                });
            }
        });
    }
}