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
        Schema::create('alkers', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alker')->unique();
            $table->string('nama_alker');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->string('kondisi');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alkers');
    }
};
