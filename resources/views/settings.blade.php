@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Settings</div>

                <div class="card-body">
                    <form id="settings-form" action="/settings" method="POST" onsubmit="
                     event.preventDefault();
                        if(document.getElementById('password1').value===document.getElementById('password2').value){
 document.getElementById('settings-form').submit();
                        }else{
                            alert('Passwords dont mach');
                        }
                        ">

                        @if (Auth::user()->role==='user')
                         <label for="id">Id</label>
                  <input class="form-control" name="id" readonly placeholder="{{Auth::user()->id}}">
               <br>
                        @endif

                    <input type="text" name="name" placeholder="{{Auth::user()->name}}" class="form-control">
                    <br>
                    <input type="text" name="telephone" placeholder="{{Auth::user()->telephone}}" class="form-control">
                    <br>
                    <input type="text" name="address" placeholder="{{Auth::user()->address}}" class="form-control">
                    <br>
                    <input type="text" name="course" placeholder="{{Auth::user()->course}}" class="form-control">
                    <br>
                    <input type="text" name="class" placeholder="{{Auth::user()->class}}" class="form-control">
                    <br>
                    @if (Auth::user()->role==='user')
                    <label for="year">Updating year will give you clean slate!</label>
                    @endif
                    <select name="year"  class="form-control">
                        <option selected hidden>Update year</option>

                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

                    </select>
                    <br>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                    <br>
                    <input type="password" name="password1" id="password1" placeholder="New password" class="form-control">
                    <br>
                    <input type="password" name="password2" id="password2" placeholder="Confirm password" class="form-control">
                    {{ csrf_field() }}
                    <script>
                        let password=document.getElementById("password1")
                        let password2=document.getElementById("password2")
                        if(password.value===password2.value){

                        }


                    </script>
<br>

                    <button class="btn btn-success btn-lg" type="submit">Save changes</button>
                  </form>

@if (Auth::user()->role==='admin')
    <form action="/deleteusers">
    <br>
    <button class="btn-danger btn btn-lg" onclick="confirm('Are you sure that you want to delete all users from your account?')" >Delete all users!</button>
</form>
@endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
