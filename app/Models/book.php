<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = ['kode_buku', 'judul_buku', 'penerbit_buku', 'pengarang_buku', 'jumlah_buku'];
}
