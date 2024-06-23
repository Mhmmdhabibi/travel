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
            $table->bigIncrements('id')->primary();
            $table->bigInteger('akun_penggunas_id')->unsigned();
            $table->bigInteger('paket_wisata_id')->unsigned();
            $table->date('tanggal_pembayaran')->nullable();
            $table->text('bukti_transfer_path')->nullable();
            $table->char('pax', 10);
            $table->char('no_telp', 13);
            $table->string('informasi_tambahan', 255)->nullable();
            $table->text('alamat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->enum('status', ['pending', 'approve', 'reject', 'berhasil', 'expired'])->default('pending');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('akun_penggunas_id')->references('id')->on('akun_penggunas');
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas');
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
