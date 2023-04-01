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
            $table->id();
            $table->string('kode_transaksi');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->foreignId('pesanan_id')->constrained('pesanans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('produk_id')->constrained('produks')->onUpdate('cascade')->onDelete('restrict');
            $table->string('total_pembayaran');
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
