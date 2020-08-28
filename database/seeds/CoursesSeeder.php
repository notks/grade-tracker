<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=new Course();
        $data=[];
        $records=array('Tehnicar Racunarstva','Tehnicar Mehatronike','Tehnicar Elektroenergetike','Elektricar',
        'Auto Elektricar','Telekomunikacije');
                for($i=0;$i<count($records);$i++){
                   $data []=[
                        'course'=>$records[$i],

                   ];

                }
                foreach($data as $course){
                    $courses::create($course);
                }
    }
}
