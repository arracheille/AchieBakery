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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id_product', 10)->primary();
            $table->string('category_id', 10);
            $table->string('product_name');
            $table->string('product_img');
            $table->text('product_description');
            $table->integer('product_price');
            $table->string('product_size');
            $table->timestamps();

            $table->foreign('category_id')->references('id_category')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
