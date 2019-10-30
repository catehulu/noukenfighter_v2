<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','waktu_login',
    ];

    public function user(){
        return $this->belongsTo('App\Model\User');
    }
}
