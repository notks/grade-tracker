@extends('layouts.app')

@section('content')

<form action="/setup" method="POST"  class="form-group">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Setup') }}</div>
                <div class="card-body">
@if (Auth::user()->first_login==true)
                        <input type="text" name="telephone" placeholder="Telephone" class="form-control">
                        <br>
                        <input type="text" name="address" placeholder="Address" class="form-control">
                        <br>
                        <label for="course">Course</label> <br>
                        <select name="course" class="form-control" >
                            @foreach ($courses as $course)
                        <option>{{$course->course}}</option>
                            @endforeach
                        </select>
                        <br>

    <label for="year">Year</label><br>
                        <select name="year" class="form-control" >

                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>


                        </select>



                        <br>
                        <input type="text" required name="class" placeholder="Class" class="form-control">
                        <br>
                        <br>
                        <br>
                        @endif
                        {{csrf_field()}}

                    <div style="height: 500px; overflow-y:scroll">
                    <table class="table" >
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

                    </div>




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
