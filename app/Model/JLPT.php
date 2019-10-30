<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JLPT extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'JLPT_level', 
        'keterangan',
    ];

    public function kanji(){
        return $this->hasMany('App\Model\Kanji');
    }
}
