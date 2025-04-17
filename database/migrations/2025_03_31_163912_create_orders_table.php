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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id_order', 10)->primary();
            $table->string('user_id', 10);
            $table->string('address_id', 10);
            $table->date('delivery_date');
            $table->text('note')->nullable();
            $table->enum('method', ['cod', 'transfer_bri'])->default('cod');
            $table->enum('status', ['pending', 'on_delivery', 'delivered'])->default('pending');
            $table->integer('total_price');
            
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id_address')->on('addresses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
