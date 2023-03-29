<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $table = 'transaksi';
    protected $fillable = [
        'id_outlet',
        'kd_invoice',
        'id_karyawan',
        'id_customer',
        'tgl_pemberian',
        'tgl_selesai',
        'tgl_bayar',
        'diskon',
        'pajak',
        'status_order',
        'status_payment',
        'ket_bayar',
        'harga_total',
        'harga_bayar',
        'harga_kembali',
    ];

    public function checkoutsatuan(){
        return $this->belongsTo(CheckoutSatuan::class, 'kd_invoice');
    }

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function CheckoutKiloan(){
        return $this->hasOne(CheckoutKiloan::class);
    }
}
