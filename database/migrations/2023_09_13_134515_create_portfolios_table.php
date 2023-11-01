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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id("portfolio_id");
            $table->string("portfolio_title");
            $table->longText("portfolio_desc");
            $table->string("portfolio_url");
            $table->string("portfolio_image_url");
            $table->unsignedBigInteger("admin_id")->required();
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
        Schema::dropIfExists('portfolios');
    }
};
