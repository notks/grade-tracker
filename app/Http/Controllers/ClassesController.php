<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Http\Middleware\AdminPermission;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(AdminPermission::class);
    }
    public function index(){
        $classes=Classes::all();
return view('classes',['classes'=>$classes]);
    }
    public function save(Request $request){
$class=new Classes();
$class->class=$request->newclass;
$class->save();
return redirect('classes');
    }
    public function delete(Request $request){
        Classes::where('id',$request->id)->firstOrFail();

Classes::where('id',$request->id)->delete();
return redirect('classes');
    }

}
