<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSatuan extends Model
{
    use HasFactory;

    public $table = 'paket_satuan';
    protected $fillable = [
        'nama_barang',
        'ket_barang',
        'harga_barang',
        'id_outlet',
    ];
}
