<?php
namespace Database\Seeders;
use App\Models\Local_Family;
use Illuminate\Database\Seeder;

class LocalFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Local_Family::factory()
            ->count(50)
            ->create();
    }
}