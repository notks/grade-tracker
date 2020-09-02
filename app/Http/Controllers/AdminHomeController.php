<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Teaching;
use App\Timetable;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class AdminHomeController extends Controller
{
public function index(){

    $students=Teaching::select(
        "teaching.id",
        "user_id",
        "admin_id",
        "users.name",
        "users.year",
        "users.class"
    )
    ->join("users", "teaching.user_id", "=", "users.id")
    ->where('admin_id',Auth()->User()->id)

    ->get();
    if(count($students)===0){
        return view('select_users');
    }
    else{
        return view('admin_home',['students'=>$students]);
    }

}
public function show(Request $request){

 $user=User::select('year','id','name')->where('id',$request->id)->get();


    $subjects=Timetable::select(
        "*"
    )
    ->join("subjects", "subjects.id", "=", "timetable.subject_id")
    ->where('timetable.user_id',$request->id)
    ->where('timetable.year',Auth()->user()->year)
    ->get();



     $grades= Grade::select(
      'grades.*'
   ) ->where('user_id',$request->id)
   ->where('year',Auth()->user()->year)
   ->get();



    return view('admin_show_grades',['subjects'=>$subjects,'name'=>$user[0]->name,'grades'=>$grades]);






}
public function print(Request $request){

    $user=User::select('year','id','name')->where('id',$request->id)->get();


    $subjects=Timetable::select(
        "*"
    )
    ->join("subjects", "subjects.id", "=", "timetable.subject_id")
    ->where('timetable.user_id',$request->id)
    ->where('timetable.year',Auth()->user()->year)
    ->get();



     $grades= Grade::select(
      'grades.*'
   ) ->where('user_id',$request->id)
   ->where('year',Auth()->user()->year)
   ->get();



    return view('admin_grades_print',['subjects'=>$subjects,'name'=>$user[0]->name,'grades'=>$grades]);




}
}
