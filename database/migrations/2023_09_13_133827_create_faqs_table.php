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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id("faq_id");
            $table->string("faq_title")->unique();
            $table->longText("faq_answer");
            $table->string("person_image_url");
            $table->timestamps();
            
            // relasional pada table
            $table->unsignedBigInteger("admin_id");
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
