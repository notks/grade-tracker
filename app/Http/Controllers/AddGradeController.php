<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Grade;
use Illuminate\Http\Request;

class AddGradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(Request $request){

 $grade=new Grade();
 if($request->date==null){
    $grade->date=now();
 }
 else{
      $grade->date=$request->date;
 }
 if($request->grade==='Select grade'){
    return redirect('/grades?subject='.$request->subject.'&module='.$request->module);

 }
 $grade->grade=$request->grade;
 $grade->subject_id=$request->subject;
 $grade->user_id=Auth()->user()->id;
 $grade->module=$request->module;
 $grade->year=Auth()->user()->year;
 $grade->save();

        return redirect('/grades?subject='.$request->subject.'&module='.$request->module);
    }
}
