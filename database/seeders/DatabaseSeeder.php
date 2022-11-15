<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Perusahaan;
use App\Models\Sekolah;
use App\Models\Logbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Guru::create([
            'no_induk' => '1111',  
            'nama_guru' => 'ahmad',
            'alamat' => 'Banyuwangi',
            'email' => 'ahmad@gmail.com',
            'no_hp' => '081778908456'
        ]);

        Perusahaan::create([
            'no_perusahaan' => 'P001',
            'nama_perusahaan' => 'Stikom',
            'nama_pimpinan' => 'Sulaiman',
            'nama_pembimbing' => 'Sukir',
            'bidang_usaha' => 'Jaringan',
            'alamat' => 'Jl. Ahmad Yani banyuwangi',
            'email' => 'jaringa@gmail.com',
            'no_hp' => '081778908456'
        ]);

        Siswa::create([
            'no_induk' => '3333',
            'nama_siswa' => 'alfani',
            'kelas' => 'XII TKJ',
            'alamat' => 'Muncar',
            'email' => 'alfani@gmail.com',
            'no_hp' => '088234678123',
            'sekolah_id' => 1,
            'perusahaan_id' => 1
        ]);
    }
}
