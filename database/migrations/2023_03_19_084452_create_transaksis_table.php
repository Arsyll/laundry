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
            $table->float('pajak')->nullable();
            $table->enum('status_order',['Diproses','Selesai','Diantar','Diterima'])->default('Diproses');
            $table->enum('status_payment',['Pending','Success'])->default('Pending');
            $table->string('ket_bayar')->nullable();
            $table->float('harga_total');
            $table->float('harga_bayar')->nullable();
            $table->float('harga_kembali')->nullable();
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
