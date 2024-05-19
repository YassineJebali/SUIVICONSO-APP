<?php

use Illuminate\Database\Seeder;
use Database\Seeders\InvoicesSeeder; // Updated
use Database\Seeders\LocalFamilySeeder;
use Database\Seeders\RoleSeeder; // Updated
use Database\Seeders\UsersSeeder; // Updated
use Database\Seeders\LocalSeeder; // Updated 
use Database\Seeders\RegionSeeder; // Updated
use Database\Seeders\PermissionSeeder; // Updated
use Database\Seeders\UserGroupSeeder;
use Database\Seeders\CounterSeeder; // Updated


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
            PermissionSeeder::class,
            RegionSeeder::class, // Add RegionSeeder to the list
            RoleSeeder::class, // Ensure RoleSeeder runs first
            UserGroupSeeder::class, // Ensure UserSeeder runs after RoleSeeder
            UsersSeeder::class, // Then UserSeeder
            LocalFamilySeeder::class, // Add LocalFamilySeeder to the list
            LocalSeeder::class, // Add LocalSeeder to the list
            CounterSeeder::class, // Add CounterSeeder to the list
            InvoicesSeeder::class, // Then InvoicesTableSeeder
            // Other seeders...
        ]);
    }
}