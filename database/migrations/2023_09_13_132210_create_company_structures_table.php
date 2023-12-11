<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_structures', function (Blueprint $table) {
            $table->id("person_id");
            $table->string("person_position");
            $table->string("person_image_url");
            $table->unsignedBigInteger('admin_id')->required();
            $table->timestamps();

            // relasi
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('restrict')->onUpdate('cascade');
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_structures');
    }
};
