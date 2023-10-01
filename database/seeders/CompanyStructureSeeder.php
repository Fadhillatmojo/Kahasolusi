<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company_structure;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Company_structure::truncate();
        Company_structure::factory(10)->create();
    }
}
