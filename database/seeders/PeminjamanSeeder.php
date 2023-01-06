<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::create([
            'user_id' => 1,
            'buku_id' => 1,
            'tanggal_peminjaman' => '2023-01-06 02:08:10',
            'tanggal_pengembalian' => '2023-01-18 02:08:10',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => null
        ]);

        Peminjaman::create([
            'user_id' => 1,
            'buku_id' => 2,
            'tanggal_peminjaman' => '2023-01-06 02:08:10',
            'tanggal_pengembalian' => '2023-01-20 02:08:10',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => null
        ]);
    }
}
