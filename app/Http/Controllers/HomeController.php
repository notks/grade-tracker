<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Subjects;
use App\Timetable;
use App\Course;
use App\Http\Middleware\CheckForAdminUser;
use App\User;
use Facade\FlareClient\Time\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckForAdminUser::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $subjects=Timetable::select(
                "*"
            )
            ->join("subjects", "subjects.id", "=", "timetable.subject_id")
            ->where('user_id',Auth()->User()->id)
            ->where('timetable.year',Auth()->User()->year)
            ->get();


         if(count($subjects)===0){
$classes=Classes::all();
$subjects=Subjects::all();
$courses=Course::all();
return view('subjects_select',[
'subjects'=>$subjects,
'courses'=>$courses,
'clasess'=>$classes
]);


        }




         return view('home',['subjects'=>$subjects]);


    }
}
