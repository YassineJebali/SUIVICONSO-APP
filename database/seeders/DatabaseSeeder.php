<?php

use Illuminate\Database\Seeder;
use Database\Seeders\InvoicesSeeder; // Updated
use Database\Seeders\RoleSeeder; // Updated
use Database\Seeders\UsersSeeder; // Updated

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class, // Ensure RoleSeeder runs first
            UsersSeeder::class, // Then UserSeeder
            InvoicesSeeder::class, // Then InvoicesTableSeeder
            // Other seeders...
        ]);
    }
}