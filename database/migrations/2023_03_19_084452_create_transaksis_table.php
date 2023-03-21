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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_outlet');
            $table->string('kd_invoice');
            $table->string('id_karyawan');
            $table->string('id_customer');
            $table->date('tgl_pemberian');
            $table->date('tgl_selesai')->nullable();
            $table->date('tgl_bayar')->nullable();
            $table->integer('diskon')->nullable();
            $table->bigInteger('pajak')->nullable();
            $table->string('status');
            $table->string('ket_bayar');
            $table->bigInteger('harga_total');
            $table->bigInteger('harga_bayar');
            $table->bigInteger('harga_kembali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
