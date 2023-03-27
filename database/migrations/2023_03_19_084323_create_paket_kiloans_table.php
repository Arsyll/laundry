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
        Schema::create('paket_kiloan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->bigInteger('harga_paket');
            $table->integer('hari_paket');
            $table->integer('min_berat_paket');
            $table->boolean('antar_jemput_paket')->nullable()->default(0);
            $table->integer('id_outlet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_kiloan');
    }
};
