<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        FAQ::truncate();
        FAQ::factory(6)->create();
    }
}
