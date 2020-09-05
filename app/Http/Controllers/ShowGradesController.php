<?php

namespace App\Http\Controllers;
use App\Grade;
use Illuminate\Http\Request;

class ShowGradesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


    }
    public function index(Request $request){

        $grades=Grade::select(
            'id',
            "grade",
            "date"
        )
        //->join("subjects", "subjects.id", "=", "grade.subject_id")
        ->where('user_id',Auth()->User()->id)
        ->Where('module',$request->module)
        ->Where('subject_id',$request->subject)
        ->get();

        return view('grades',[
            'grades'=>$grades,
            'subject'=>$request->subject,
            'module'=>$request->module
        ]);
    }
}
