<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Course;
use App\Teaching;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(Request $request){
    if($request->email!==null){
        User::where('id',Auth()->User()->id)
        ->update(['email'=>$request->email]);


    }if($request->password1!==null){
        User::where('id',Auth()->User()->id)
        ->update(['password'=>Hash::make($request->password1)]);


    }if($request->year!=='Update year'){
        if($request->year!==Auth()->user()->year){
            User::where('id',Auth()->User()->id)
->update(['year'=>$request->year]);
        }
    }if($request->name!==null){
        User::where('id',Auth()->User()->id)
        ->update(['name'=>$request->name]);
    }if($request->telephone!==null){
        User::where('id',Auth()->User()->id)
        ->update(['telephone'=>$request->telephone]);
    }if($request->address!==null){
        User::where('id',Auth()->User()->id)
        ->update(['address'=>$request->address]);
    }if($request->course!==null){
        User::where('id',Auth()->User()->id)
        ->update(['course'=>$request->course]);
    }if($request->class!==null){
        User::where('id',Auth()->User()->id)
        ->update(['class'=>$request->class]);
    }












        return redirect('home');
    }
    public function deleteusers(Request $request){
        Teaching::where('admin_id',Auth()->user()->id)->delete();
        return redirect('adminhome');
    }
    public function show(){
        $courses=Course::all();
        $classes=Classes::all();
        return view('settings',[
            'courses'=>$courses,
            'classes'=>$classes
            ]);
    }

}
