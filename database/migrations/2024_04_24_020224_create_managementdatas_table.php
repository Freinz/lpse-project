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
        Schema::create('managementdatas', function (Blueprint $table) {
            $table->id();
            $table->string('city_name')->nullable();
            $table->string('jenis_barang')->nullable();
            $table->string('nama_barang')->nullable();
            $table->integer('harga_satuan')->nullable();
            $table->integer('kuartal')->nullable();
            $table->integer('tahun')->nullable();
            
            $table->timestamps();


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managementdatas');
    }
};