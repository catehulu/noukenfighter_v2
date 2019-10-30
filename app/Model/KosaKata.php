<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KosaKata extends Model
{
    protected $fillable = [
        'jp_vocab', 
        'eng_vocab', 
        'contoh_kalimat',
    ];
}
