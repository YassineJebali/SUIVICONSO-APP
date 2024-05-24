<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Local;
use App\Models\Counter;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Local::factory()->count(10)->create()->each(function ($local) {
            // For each local, create 3 counters with different types
            $counterTypes = ['water', 'electricity', 'gas'];
            foreach ($counterTypes as $type) {
                $local->counters()->save(Counter::factory()->state(['type' => $type])->make());
            }
        });
    }
}