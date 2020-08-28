<?php

namespace App\Http\Controllers;
use App\Timetable;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function index(Request $request){

foreach($request->subjects as $subject){
    $timetable=new Timetable();
    $timetable->user_id=Auth()->user()->id;
    $timetable->subject_id=$subject;
    if($request->year==null){

        $timetable->year=Auth()->user()->year;
    }else{

        $timetable->year=$request->year;
    }

    $timetable->save();
}



if(Auth()->user()->first_login==true){
    User::where('id',Auth()->User()->id)
->update(['telephone'=>$request->telephone,'address'=>$request->address,'course'=>$request->course,'class'=>$request->class,'year'=>$request->year]);
    User::where('id',Auth()->User()->id)->update(['first_login'=>0]);
}


return redirect('/home');
    }
}
