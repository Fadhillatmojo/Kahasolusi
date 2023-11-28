<?php

namespace Database\Seeders;

use App\Models\Admin;
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

        $pass = 'LMyJNwF55shWUXXbhxTYu';
        $string_password = '$2y$10$'.$pass.'.81hxtZxLre1jM.P2gUkq/TRdtDIB3YK';
        Admin::insert([
            'username' => 'kahasolusi',
            'email' => 'info@kahasolusi.com',
            'password' => $string_password,
        ]);
        Admin::factory(3)->create();
    }
}
