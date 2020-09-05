@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subjects  </div>


                <div class="card-body">

<form action="/addsubject" method="POST"  id="UserForm">
    {{ csrf_field() }}
<div class="form-group">

    <input class="form-control"  type="text" name="subject" placeholder="Subject" >
    <label for="course">Chose course!</label>

    <select name="course" class="form-control">
@foreach ($courses as $course)
<option>{{$course->course}}</option>
@endforeach

</select>
<label for="year">Chose year!</label>
<select name="year" class="form-control">

    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>

    </select>
    <label for="module">Chose number of modules!</label>
    <select name="module" class="form-control">

        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>

        </select>

<br>
     <button id="addbtn" class="btn btn-success  mb-2 mr-4" style="border-radius: 40%"  type="submit"><b>+</b></button>



</div>
</form>
<table id="myTable" class="table">
    <th colspan="1">
        Subject
    </th>
    <th>Course</th>
    <th>Year</th>
    <th>Module count</th>

    <th>
        Delete
    </th>




    @foreach($subjects as $subject)
    <tr>
    <td>
        {{$subject->subject}}
    </td>
<td>{{$subject->course}}</td>
<td>{{$subject->year}}</td>
<td>
    {{$subject->module_count}}

</td>
<td>
    <a href="/deletesubject?id={{$subject->id}}"><button class="btn-danger btn btn-lg"  >-</button></a>
</td>





    </tr>
@endforeach



</table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
