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
        Schema::create('rahmi_peminjamans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('anggota_id');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('buku_id')->references('id')->on('rahmi_bukus')->onDelete('cascade');
            $table->foreign('anggota_id')->references('id')->on('rahmi_anggotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rahmi_peminjamans');
    }
};
