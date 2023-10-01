<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Admin::truncate();
        // Admin::insert([
        //     "admin_username"=> "John Doe",
        //     "admin_email"=> "eko@gmail.com",
        //     "admin_password"=> "okeokwojwo"
        // ]);
        Admin::factory(3)->create();
    }
}
