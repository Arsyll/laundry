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
}
