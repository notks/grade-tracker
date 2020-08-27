@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <th colspan="1">
                            Subject
                        </th>
                        <th colspan="4" style="text-align: center" >
                            Modules
                        </th>

                        @foreach($subjects as $subject)
                        <tr>
                        <td>
                             {{$subject->subject}}
                        </td>
                        @for($i=0;$i<$subject->module_count;$i++)
                    <td><a href="/grades?subject={{$subject->id}}&module={{$i+1}}"><button class="btn btn-primary">Module {{$i+1}}</button></a></td>

                        @endfor

                        </tr>
                    @endforeach



                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
