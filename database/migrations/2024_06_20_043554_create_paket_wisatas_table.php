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
        Schema::create('paket_wisatas', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['wisata', 'camping'])->default('wisata');
            $table->text('title');
            $table->text('gambar');
            $table->bigInteger('harga');
            $table->bigInteger('fees');
            $table->text('percentage');
            $table->text('detail');
            $table->char('norek', 20);
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('akun_penggunas_id')->unsigned();
            $table->bigInteger('paket_wisata_id')->unsigned();
            $table->date('tanggal_pembayaran')->nullable();
            $table->text('bukti_transfer_path')->nullable();
            $table->char('pax',10);
            $table->char('no_telp', 13);
            $table->text('alamat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->enum('status', ['pending', 'approve', 'reject', 'berhasil', 'expired']);
            $table->foreign('akun_penggunas_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wisatas');
    }
};
