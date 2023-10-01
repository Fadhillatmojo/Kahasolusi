<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CompanyStructureSeeder::class,
            FAQSeeder::class,
            PortfolioSeeder::class,
            RoleSeeder::class,
            TestimonialSeeder::class,
            ToolSeeder::class
        ]);
    }
}
