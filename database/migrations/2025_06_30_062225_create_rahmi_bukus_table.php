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
        Schema::create('rahmi_bukus', function (Blueprint $table) {
    $table->id();
    $table->string('judul');
    $table->string('penulis');
    $table->year('tahun_terbit');
    $table->unsignedBigInteger('kategori_id');
    $table->timestamps();

    $table->foreign('kategori_id')->references('id')->on('rahmi_kategoris')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rahmi_bukus');
    }
};
