<?php

use App\Subjects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 $subject=new Subjects();
$data=[];
$records=array('TIZO','Osnove Poduzetnistva','Sociologija','Bosanski Jezik I Knjizevnost',
'Njemacki Jezik Fakultativna Nastava','Engleski Jezik','Matematika','Baze Podataka','Programiranje',
'Prakticna Nastava','Mikroracunari','WEB Programiranje','Digitalna Tehnika');
        for($i=0;$i<count($records);$i++){
           $data []=[
               'subject'=>$records[$i],
               'course'=>'tehnicar racunarstva',
               'year'=>4,
               'module_count'=>4
           ];

        }
        foreach($data as $data1){
            $subject::create($data1);
        }


    }
}
