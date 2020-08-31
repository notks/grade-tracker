
@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                        <table id="myTable" class="table">
                        <th colspan="1">
                            Student
                        </th>
                        <th>Year</th>
                        <th>Class</th>
                        <th>Select user</th>
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
                        <td><button class=" btn btn-primary">Select</button></td>
                        <td><a href="/deleteuser?user={{$student->id}}"><button class="btn btn-danger btn-sm">-</button></a></td>



                        </tr>
                    @endforeach



                    </table>

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
