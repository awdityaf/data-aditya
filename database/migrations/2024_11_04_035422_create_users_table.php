<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('email')->unique()->nullable(); // Kolom email (unik)
            $table->string('password')->nullable(); // Kolom password
            $table->string('no_handphone')->nullable(); // Kolom no handphone
            $table->string('nama')->nullable(); // Nama pengguna
            $table->string('nik')->unique()->nullable(); // Nomor Induk Kependudukan (unik)
            $table->integer('durasi')->nullable(); // Durasi
            $table->date('tanggal_mulai'); // Durasi
            $table->date('tanggal_selesai')->nullable(); // Durasi
            $table->unsignedBigInteger('id_kategori')->nullable(); // ID Kategori
            $table->enum('role',['admin','user'])->default('user')->nullable();
            $table->string('status'); // Kolom username (unik)
            $table->timestamps(); // Kolom timestamp untuk created_at dan updated_at

            $table->foreign('id_kategori')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
