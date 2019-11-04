<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data_pembelajaran_id', 
        'data_soal', 
        'data_jawaban', 
        'kunci_jawaban', 
        'jawaban_peserta',
        'skor',
        'keterangan'
    ];

    public function data_pembelajaran(){
        return $this->belongsTo('App\Model\DataPembelajaran');
    }
}
