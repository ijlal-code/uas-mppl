<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->text('fasilitas');
            
            // Kolom Alamat Baru
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->text('alamat');
            
            // Kolom Verifikasi Unsulbar
            $table->boolean('is_sekitar_unsulbar')->default(false); // Dipilih pemilik kost
            $table->boolean('is_verified')->default(false); // Diverifikasi Superadmin
            
            $table->string('foto')->nullable();
            $table->string('whatsapp');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kosts');
    }
};