<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Middleware\AdminPermission;
use App\Subjects;
use Illuminate\Http\Request;

class SubjectControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(AdminPermission::class);
    }
    public function save(Request $request){
        $subject =new Subjects();
        $subject->subject=$request->subject;
        $subject->course=$request->course;
        $subject->year=$request->year;
        $subject->module_count=$request->module;
        $subject->save();
        return redirect('subjects');
    }
     public function index(){
         $courses=Course::all();
         $subjects=Subjects::all();
         return view('subjects',[
            'subjects'=>$subjects,
            'courses'=>$courses
         ]);
     }
     public function delete(Request $request){
        Subjects::where('id',$request->id)->firstOrFail();
         Subjects::where('id',$request->id)->delete();
return redirect('subjects');
     }
}
