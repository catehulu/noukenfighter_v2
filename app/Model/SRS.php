<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SRS extends Model
{
    protected $fillable = [
        'data_pembelajaran_id', 
        'kanji_id', 
        'penambah',
        'waktu_review',
    ];

    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'waktu_review',
    ];

    public function kanji(){
        return $this->belongsTo('App\Model\Kanji');
    }

    public function data_pembelajaran(){
        return $this->belongsTo('App\Model\DataPembelajaran');
    }
}
