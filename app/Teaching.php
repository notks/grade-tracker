<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
    protected $table='teaching';


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function admin(){
        return $this->belongsTo(User::class);
    }
}
