<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutKiloan extends Model
{
    use HasFactory;

    public $table = 'checkout_kiloan';
    protected $fillable = [
        'kd_invoice',
        'id_paket',
        'berat_barang',
        'metode_pembayaran',
        'harga_paket',
        'harga_antar',
        'harga_total',
    ];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'kd_invoice');
    }
    public function paket(){
        return $this->belongsTo(PaketKiloan::class, 'id_paket');
    }
}
