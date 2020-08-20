<?php

namespace App\Http\Controllers;

use App\Subjects;
use App\User;
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
           // User::where('id',Auth()->User()->id)->update(['first_login'=>0]);
$subjects=Subjects::all();
return view('subjects_select',[
'subjects'=>$subjects
]);


        }
        else{
         return view('home');
        }

    }
}
