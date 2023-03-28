<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutSatuan extends Model
{
    use HasFactory;

    public $table = 'checkout_satuan';
    protected $fillable = [
        'kd_invoice',
        'id_barang',
        'jumlah_barang',
        'metode_pembayaran',
        'harga_barang',
        'harga_antar',
        'harga_total',
    ];
    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'kd_invoice');
    }
}
