<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index(Request $request){
error_log("------------------------------------------------------------------------------------------");
echo $request->subjects;

return view('test');
    }
}
