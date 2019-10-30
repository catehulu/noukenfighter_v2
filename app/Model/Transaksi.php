<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function paket(){
        return $this->belongsTo('App\Model\Paket');
    }

    public function user(){
        return $this->belongsTo('App\Model\User');
    }
}
