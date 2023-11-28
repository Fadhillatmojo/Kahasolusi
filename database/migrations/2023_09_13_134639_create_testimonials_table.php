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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id('testimonial_id');
            $table->string('testimonial_client');
            $table->longText('testimonial_desc');
            $table->string('testimonial_image_url');
            $table->unsignedBigInteger('admin_id')->required();
            $table->timestamps();

            // relasional pada table
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
