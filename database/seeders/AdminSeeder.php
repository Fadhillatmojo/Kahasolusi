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

        $pass = "HXspwjU25dRVuBIIAdj2uuh9";
        $string_password = "$2y$10$".$pass."/0xoxEn/JSxEE7gMQYdeHvTshJlZq";
        
        Admin::insert([
            "username"=> "kahasolusi",
            "email"=> "info@kahasolusi.com",
            "password"=> $string_password
        ]);
        // Admin::factory(3)->create();
    }
}
