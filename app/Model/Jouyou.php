<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jouyou extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Joyou_level', 
        'keterangan',
    ];

    public function kanji(){
        return $this->hasMany('App\Model\Kanji');
    }
}
