<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class DeleteGradeController extends Controller
{ public function __construct()
{
    $this->middleware('auth');
}
    public function index(Request $request){
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
