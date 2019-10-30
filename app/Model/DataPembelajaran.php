<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataPembelajaran extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'srs_data', 
        'grammar_data', 
        'kota_kata_data'
    ];

    public function user(){
        return $this->belongsTo('App\Model\User');
    }

    public function srs(){
        return $this->hasMany('App\Model\SRS');
    }

    public function kanji(){
        return $this->hasManyThrough('App\Model\Kanji','App\Model\SRS');
    }
}
