<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketKiloan extends Model
{
    use HasFactory;

    public $table = 'paket_kiloan';
    protected $fillable = [
        'kd_paket',
        'nama_paket',
        'harga_paket',
        'hari_paket',
        'min_berat_paket',
        'antar_jemput_paket',
        'id_outlet',
    ];
    public function outlet(){
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
    public function CheckoutKiloan(){
        return $this->hasOne(CheckoutKiloan::class);
    }
}
