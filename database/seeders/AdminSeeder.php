<?php

namespace Database\Seeders;

use App\Models\Admin;
use Database\Factories\AdminsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin::insert([
        //     "admin_username"=> "John Doe",
        //     "admin_email"=> "eko@gmail.com",
        //     "admin_password"=> "okeokwojwo"
        // ]);
        Admin::factory(10)->create();
    }
}
