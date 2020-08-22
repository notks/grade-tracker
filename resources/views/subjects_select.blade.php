@extends('layouts.app')

@section('content')

<form action="http://127.0.0.1:8000/setup" method="POST"  class="form-group">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Setup') }}</div>
                <div class="card-body">

                        <input type="text" name="name" placeholder="Full name" class="form-control">
                        <br>
                        <input type="text" name="telephone" placeholder="Telephone" class="form-control">
                        <br>
                        <input type="text" name="address" placeholder="Address" class="form-control">
                        <br>
                        <input type="text" name="course" placeholder="Course" class="form-control">
                        <br>
                        <input type="text" name="class" placeholder="Class" class="form-control">
                        <br>
                        <br>
                        <br>
                        {{csrf_field()}}
                            <table class="table">
                                <tr>
                                    <th>Subject</th>
                                    <th>Course</th>
                                    <th>Year</th>
                                    <th>Module Count</th>
                                    <th>Select</th>

                                </tr>
                                @foreach ($subjects as $subject)<tr><td>
                            {{$subject->subject}}</td>
                            <td>
                                {{$subject->course}}
                            </td>
                        <td>{{$subject->year}}</td>
                        <td>{{$subject->module_count}}</td>
                            <td>
                         <input type="checkbox" name="subjects[]" value="{{$subject->id}}" placeholder="{{$subject->subject}}">
</td>
                            </tr>
                            @endforeach
                            </table>



                        <button class="btn btn-success" type="submit" >
                            Save
                        </button>


            </div>
        </div>
    </div>
</div>
</div>
                        </form>





@endsection
