<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama');
            $table->string('kelas'); // ✅ tambahkan kolom kelas

            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_wali');
            $table->string('alamat_domisili');
            $table->string('asal_sekolah');
            $table->string('agama');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('nomor_telepon')->nullable();
            $table->enum('status', ['active', 'graduated'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
