<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table='grades';

public function subject(){
    return $this->belongsTo(Subject::class);
}

public function user(){
    return $this->belongsTo(User::class);
}
}
