@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Grades</div>

                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <th>Grade</th>
                        <th>Date</th>
                        <th>Delete</th>

@foreach ($grades as $grade)
<tr>
<td>{{$grade->grade}}</td>
<td> {{$grade->date}}</td>
<td><a href="/deletegrade?grade={{$grade->id}}&subject={{$subject}}&module={{$module}}"><button class="btn btn-danger btn-sm">-</button></a></td>
</tr>
@endforeach
</table>
<!-- Button trigger modal -->
<button style="align-self: flex-end" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
    Add Grade
  </button>
<form action="/addgrade" method="POST">
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add grade</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <select class="form-control" name="grade" required >
           <option selected hidden>Select grade</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>

       </select>
        <br>
        <label for="date"> Date</label>
        <br>
        <input type="date" name="date" placeholder="Date">
        Leave empty for today!
    <input type="number" hidden value="{{$subject}}" name="subject">
    <input type="number" hidden value="{{$module}}" name="module">
    {{ csrf_field() }}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
