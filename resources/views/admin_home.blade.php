
@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}  <div style="align-self: flex-start">year</div></div>


                <div class="card-body">

                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                        <table id="myTable" class="table">
                        <th colspan="1">
                            Student
                        </th>
                        <th>Year</th>
                        <th>Class</th>
                        <th>Select user</th>
                        <th>Print</th>
                        <th>
                            Delete
                        </th>




                        @foreach($students as $student)
                        <tr>
                        <td>
                            {{$student->name}}
                        </td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->class}}</td>
                    <td><form action="/admingrades">
                        <button type="submit" name="id" value="{{$student->user_id}}" class=" btn btn-primary">Select</button>
                    </form>

                    </td>
                    <td><a href="/printgrades?id={{$student->user_id}}"><button class="btn-secondary btn"  >Print</button></a></td>

                        <td><a href="/deleteuser?user={{$student->id}}"><button class="btn btn-danger btn-sm">-</button></a></td>



                        </tr>
                    @endforeach



                    </table>
                    <form action="/adminsetup" method="POST"  id="UserForm">
                        {{ csrf_field() }}
                    <div class="form-row my-2">
                        <div class="col">
                        <input class="form-control"  type="text" name="user[]" placeholder="Insert user id!" >

                        </div>
                        <div class="col-auto">
                         <button id="addbtn" class="btn btn-success  mb-2 mr-4" style="border-radius: 40%"  type="submit"><b>+</b></button>

                        </div>

                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
@endsection
