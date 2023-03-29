<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSatuan extends Model
{
    use HasFactory;

    public $table = 'paket_satuan';
    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'ket_barang',
        'harga_barang',
        'id_outlet',
    ];
    public function outlet(){
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
    public function CheckoutSatuan(){
        return $this->hasOne(CheckoutSatuan::class);
    }
}
