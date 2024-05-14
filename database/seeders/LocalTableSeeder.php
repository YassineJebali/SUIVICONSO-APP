<?php

use Illuminate\Database\Seeder;
use App\Models\Local;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Local::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }
}