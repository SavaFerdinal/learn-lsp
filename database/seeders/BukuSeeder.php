<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'Restless',
            'kategori_id' => 2,
            'penerbit_id' => 2,
            'tahun_terbit' => '2019',
            'isbn' => '9786026193032',
            'photo' => '',
            'pengarang' => 'Ahmad Mahdi',
            'j_buku_baik' => 18,
            'j_buku_buruk' => 2
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'kategori_id' => 4,
            'penerbit_id' => 1,
            'tahun_terbit' => '2006',
            'isbn' => '9786012313032',
            'photo' => '',
            'pengarang' => 'Penulis',
            'j_buku_baik' => 28,
            'j_buku_buruk' => 2
        ]);
    }
}
