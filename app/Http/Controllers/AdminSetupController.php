<?php

namespace App\Http\Controllers;

use App\Teaching;
use App\User;
use Illuminate\Http\Request;

class AdminSetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(AdminPermission::class);


    }
    public function index(Request $request){
        if($request->addAll==true){
            $users=User::where('role','user')->get();
            foreach($users as $user){
                $relation=new Teaching();
            $relation->user_id=$user->id;
            $relation->admin_id=Auth()->user()->id;
           $relation->save();
            }
        }
        else{
             array_unique($request->user);
        for($i=0;$i<count($request->user);$i++){
            if( filter_var($request->user[$i], FILTER_VALIDATE_INT) === false ){
                continue;
                error_log($request->user[$i]);
            }

            if($request->user[$i]==''){
               continue;
        }

  $relation=new Teaching();
            $relation->user_id=$request->user[$i];
            $relation->admin_id=Auth()->user()->id;
           $relation->save();


        }
        }

        return redirect('adminhome');
    }
    public function delete(Request $request){
        error_log($request->user);
Teaching::where('id',$request->user)->delete();
return redirect('adminhome');
}
}
