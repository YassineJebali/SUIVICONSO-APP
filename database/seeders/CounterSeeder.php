<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Counter;
use App\Models\Invoice;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::factory()->count(10)->create()->each(function ($counter) {
            // For each counter, create 12 invoices
            for ($i = 0; $i < 12; $i++) {
                $counter->invoices()->save(Invoice::factory()->make());
            }
        });
    }
}