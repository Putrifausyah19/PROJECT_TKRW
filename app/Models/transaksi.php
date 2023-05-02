<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_transaksi',
        'nama_pelanggan',
        'alamat',
        'no_hp',
        'jumlah_pesanan',
        'total_pembayaran',
        'produk_id',
        
    ];

    public function produk(){
        return $this->belongsTo(produk::class);
    }
}
