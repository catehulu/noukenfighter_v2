<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = [
        'nama_paket', 
        'harga_paket', 
    ];

    public function transaksi(){
        return $this->hasMany('App\Model\Transaksi');
    }

    public function user(){
        return $this->hasManyThrough('App\Model\User','App\Model\Transaksi');
    }
    
}
