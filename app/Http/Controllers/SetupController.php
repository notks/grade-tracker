<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index(Request $request){
echo $request->subjects;

return view('test');
    }
}
