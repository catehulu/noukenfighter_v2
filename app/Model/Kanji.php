<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    protected $fillable = [
        'joyou_id', 
        'jlpt_id', 
        'keyword',
        'kanji',
        'stroke_diagram',
        'constituent',
        'stroke_count',
        'lesson_no',
        'story',
        'on_yomi',
        'kun_yomi',
    ];

    public function jlpt(){
        return $this->belongsTo('App\Model\JLPT');
    }

    public function jouyou(){
        return $this->belongsTo('App\Model\Jouyou');
    }
}
