@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$name}}</div>

                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <th>Subject</th>
                        <th>Modules</th>
                        <th>Grades</th>

@foreach ($subjects as $subject)
    <tr>
    <td rowspan="{{$subject->module_count+1}}" style="vertical-align: middle;">
            {{$subject->subject}}
        </td>
        @for ($i = 1; $i <$subject->module_count+1; $i++)
            <tr>
            <td>{{'M'.$i}}</td>
            <td>
                @foreach ($grades as $grade)
                    @if ($grade->subject_id===$subject->subject_id )
                    @if ( $grade->module===$i)
                   {{$grade->grade}}


                    @endif


                    @endif


                @endforeach
            </td>
            </tr>
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
