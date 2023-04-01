<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_transaksi',
        'nama_pelanggan',
        'alamat',
        'no_hp',
        'pesanan_id',
        'produk_id',
        'total_pembayaran',
    ];
}
