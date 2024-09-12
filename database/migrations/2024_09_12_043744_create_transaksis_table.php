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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nota');
            $table->uuid('id_outlet');
            $table->uuid('id_customer');
            $table->uuid('id_item');
            $table->string('nama_item');
            $table->integer('harga');
            $table->string('kg');
            $table->integer('subtotal');
            $table->uuid('id_diskon')->default(0);
            $table->integer('harga_diskon');
            $table->uuid('id_ongkir')->default(0);
            $table->integer('harga_ongkir');
            $table->integer('harga_lainlain');
            $table->integer('keterangan');
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
        Schema::dropIfExists('transaksis');
    }
};
