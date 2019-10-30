<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Grammar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul_grammar', 
        'arti_grammar', 
        'formula_grammar',
    ];
}
