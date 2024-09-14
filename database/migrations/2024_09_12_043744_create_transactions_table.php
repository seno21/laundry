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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('note');
            $table->uuid('outlet_id');
            $table->uuid('customer_id');
            $table->uuid('item_id');
            $table->string('item_name');
            $table->integer('price');
            $table->string('kg');
            $table->integer('subtotal');
            $table->uuid('discount_id')->default(0);
            $table->integer('discount_price');
            $table->uuid('delivery_id')->default(0);
            $table->integer('delivery_fee');
            $table->integer('other_price');
            $table->integer('information');
            $table->integer('total');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
