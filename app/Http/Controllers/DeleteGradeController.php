<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class DeleteGradeController extends Controller
{
    public function index(Request $request){
        Grade::where('id',$request->grade)
        ->delete();
        return redirect ('/grades?subject='.$request->subject.'&module='.$request->module);
    }
}
