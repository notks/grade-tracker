@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Setup</div>

                <div class="card-body">
                    <form action="/adminsetup" method="POST">
                        {{ csrf_field() }}
                        <button name="addAll" type="submit" value="true" class="btn btn-primary btn-lg">Select all users</button>
                    </form>

                    <br>
                    <div>
                        <form action="/adminsetup" method="POST"  id="UserForm">
                        {{ csrf_field() }}
                            <br>
                            <div class="form-row my-2">
                                <div class="col">
                                <input class="form-control"  type="text" name="user[]" placeholder="Insert user id!" >

                                </div>
                                <div class="col-auto">
                                 <button id="addbtn" class="btn btn-success  mb-2 mr-4" style="border-radius: 40%" onclick=" addfield()"><b>+</b></button>

                                </div>

                            </div>


                        <button class="btn btn-success btn-lg" type="submit">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script defer>
function addfield(){


let addBtn=document.getElementById('addbtn')

//addBtn.addEventListener('click',(e)=>{
event.preventDefault()
let userForm=document.getElementById('UserForm')

let div1=document.createElement('div')
let div2=document.createElement('div')
let div3=document.createElement('div')
div1.classList.add('form-row')
div1.classList.add('my-2')

div2.classList.add('col')
div3.classList.add('col-auto')
 let newInput=document.createElement('input');
 newInput.type='text'
 newInput.name='user[]'
 newInput.classList.add('form-control')
 newInput.placeholder='Insert user id!'
 div2.appendChild(newInput);
 div3.appendChild(addBtn)
 div1.appendChild(div2)
 div1.appendChild(div3)
 userForm.insertBefore(div1,userForm.lastChild)
newInput.focus()
//})
}


</script>
@endsection
