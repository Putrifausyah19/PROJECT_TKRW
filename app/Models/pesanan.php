<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pesanan',
        'status_pembayaran',
        'status_pesanan',
        'transaksi_id',
        'kurir_id',
    ];

    public function transaksi(){
        return $this->belongsTo(transaksi::class);
    }

    public function kurir(){
        return $this->belongsTo(Kurir::class);
    }
}
