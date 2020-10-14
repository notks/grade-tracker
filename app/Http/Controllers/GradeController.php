<?php

namespace App\Http\Controllers;

use App\Grade;


use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $grade=Grade::where('id',$request->grade)->firstOrFail();
        if($grade->user_id===Auth()->user()->id){
            Grade::where('id',$request->grade)
            ->delete();
 return redirect ('/grades?subject='.$request->subject.'&module='.$request->module);
        }else{
            abort(401);
        }
    }
}
