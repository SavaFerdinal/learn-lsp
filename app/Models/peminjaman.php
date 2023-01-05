<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'buku_id', 'tanggal_peminjaman', 'tanggal_pengembalian', 'kondisi_buku_saat_dipinjam', 'kondisi_buku_saat_dikembalikan', 'denda'];
}
