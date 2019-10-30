<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kana extends Model
{
    protected $fillable = [
        'kana', 
        'reading', 
        'tipe',
    ];
}
