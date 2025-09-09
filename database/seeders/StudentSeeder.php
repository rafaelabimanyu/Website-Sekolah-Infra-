<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nis' => '001',
                'nama' => 'Budi Santoso',
                'kelas' => 'X PPLG 1',
                'jenis_kelamin' => 'Laki-Laki',
                'status' => 'active',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2008-05-12',
                'nama_wali' => 'Sutrisno',
                'alamat_domisili' => 'Jl. Melati No. 10, Jakarta',
                'asal_sekolah' => 'SMP Negeri 1 Jakarta',
                'agama' => 'Islam',
                'nomor_telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nis' => '002',
                'nama' => 'Siti Aisyah',
                'kelas' => 'X PPLG 1',
                'jenis_kelamin' => 'Perempuan',
                'status' => 'active',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2008-08-21',
                'nama_wali' => 'Ahmad',
                'alamat_domisili' => 'Jl. Mawar No. 20, Bandung',
                'asal_sekolah' => 'SMP Negeri 2 Bandung',
                'agama' => 'Islam',
                'nomor_telepon' => '082345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nis' => '003',
                'nama' => 'Joko Prasetyo',
                'kelas' => 'X PPLG 1',
                'jenis_kelamin' => 'Laki-Laki',
                'status' => 'active',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '2008-03-15',
                'nama_wali' => 'Mulyono',
                'alamat_domisili' => 'Jl. Kenanga No. 5, Surabaya',
                'asal_sekolah' => 'SMP Negeri 3 Surabaya',
                'agama' => 'Kristen',
                'nomor_telepon' => '083456789012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
