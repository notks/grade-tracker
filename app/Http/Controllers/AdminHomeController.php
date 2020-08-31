<?php

namespace App\Http\Controllers;

use App\Teaching;
use App\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
public function index(){

    $students=Teaching::select(
        "teaching.id",
        "user_id",
        "admin_id",
        "users.name",
        "users.year",
        "users.class"
    )
    ->join("users", "teaching.user_id", "=", "users.id")
    ->where('admin_id',Auth()->User()->id)

    ->get();
    if(count($students)===0){
        return view('select_users');
    }
    else{
        return view('admin_home',['students'=>$students]);
    }

}
}
