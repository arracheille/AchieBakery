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
        Schema::create('moment_categories', function (Blueprint $table) {
            $table->string('id_momcat', 10)->primary();
            $table->string('category_id', 10);
            $table->string('moment_id', 10);

            $table->foreign('category_id')->references('id_category')->on('categories')->onDelete('cascade');
            $table->foreign('moment_id')->references('id_moment')->on('moments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moment_categories');
    }
};
