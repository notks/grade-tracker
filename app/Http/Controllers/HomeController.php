<?php

namespace App\Http\Controllers;

use App\Subjects;
use App\Timetable;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         if(Auth()->user()->first_login==true){

$subjects=Subjects::all();
return view('subjects_select',[
'subjects'=>$subjects
]);


        }
        else{

        $subjects=Timetable::select(
                "*"
            )
            ->join("subjects", "subjects.id", "=", "timetable.subject_id")->where('user_id',Auth()->User()->id)
            ->get();
foreach($subjects as $subject){
    echo $subject->subject;
}
         return view('home');
        }

    }
}
