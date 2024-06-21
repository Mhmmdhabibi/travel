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
            $table->enum('type', ['wisata', 'camping']);
            $table->text('title');
            $table->bigInteger('harga');
            $table->text('detail');
            $table->char('norek', 20);
            $table->timestamps();
        });
        Schema::create('akun_penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_telp')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
