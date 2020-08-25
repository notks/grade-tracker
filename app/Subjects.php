<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public $table = 'subjects';


    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }

}
