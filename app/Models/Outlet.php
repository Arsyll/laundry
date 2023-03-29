<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    public $table = 'outlet';
    protected $fillable = [
        'nama',
        'alamat',
        'hotline',
        'email',
        'iframe_script',
    ];
    public function Transaksi(){
        return $this->hasOne(Transaksi::class);
    }
    public function User(){
        return $this->hasOne(User::class);
    }
    public function PaketKiloan(){
        return $this->hasOne(PaketKiloan::class);
    }
    public function PaketSatuan(){
        return $this->hasOne(PaketSatuan::class);
    }
}
