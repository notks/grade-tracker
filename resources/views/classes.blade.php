@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Classes</div>


                <div class="card-body">

                    <form action="/addclass" method="POST"  id="UserForm">
                        {{ csrf_field() }}
                    <div class="form-row my-2">
                        <div class="col">
                        <input class="form-control"  type="text" name="newclass" placeholder="Insert name of class!" >

                        </div>
                        <div class="col-auto">
                         <button id="addbtn" class="btn btn-success  mb-2 mr-4" style="border-radius: 40%"  type="submit"><b>+</b></button>

                        </div>

                    </div>
                </form>
<table id="myTable" class="table">
    <th colspan="1">
        Class
    </th>

    <th style="text-align: right">
        Delete
    </th>




    @foreach($classes as $class)
    <tr>
    <td>
        {{$class->class}}
    </td>

<td style="text-align: right">
    <a href="/deleteclass?id={{$class->id}}"><button class="btn-danger btn btn-lg"  >-</button></a>
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
