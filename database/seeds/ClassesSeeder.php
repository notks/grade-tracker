<?php

use App\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++){
            $class=new Classes();
            $class->class='T'.$i;
            $class->save();
        }
    }
}
