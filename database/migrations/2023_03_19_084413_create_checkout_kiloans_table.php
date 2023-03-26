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
        Schema::create('checkout_kiloan', function (Blueprint $table) {
            $table->id();
            $table->string('kd_invoice');
            $table->string('id_paket');
            $table->integer('berat_barang');
            $table->enum('metode_pembayaran',['Outlet','Rumah'])->default('Outlet');
            $table->bigInteger('harga_paket');
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
        Schema::dropIfExists('checkout_kiloan');
    }
};
