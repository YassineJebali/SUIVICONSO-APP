<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Counter;
use App\Models\Invoice;
use App\Models\Local;
use Illuminate\Support\Facades\DB;

class CounterSeeder extends Seeder
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
                    'local_id' => $local->id, // Add this line
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