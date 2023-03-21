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
        Schema::create('checkout_satuans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_invoice');
            $table->string('id_barang');
            $table->integer('jumlah_barang');
            $table->string('metode_pembayaran');
            $table->bigInteger('harga_barang');
            $table->bigInteger('harga_antar')->default(0);
            $table->bigInteger('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_satuans');
    }
};
