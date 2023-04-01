<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pesanan',
        'nama_pelanggan',
        'qty',
        'status_pembayaran',
        'status_pesanan',
        'produk_id',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class);
    }
}
