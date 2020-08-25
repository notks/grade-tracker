<?php

namespace App\Http\Controllers;
use App\Timetable;
use App\User;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index(Request $request){

foreach($request->subjects as $subject){
    $timetable=new Timetable();
    $timetable->user_id=Auth()->user()->id;
    $timetable->subject_id=$subject;
    $timetable->save();
}

 User::where('id',Auth()->User()->id)->update(['first_login'=>0]);
echo 'done';
return view('test');
    }
}
