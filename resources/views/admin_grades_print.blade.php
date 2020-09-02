<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
         window.onload=()=>{
             window.print()
         }


    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$name}}</div>

                <div class="card-body">
                    <table class="table table-sm" style="text-align: center">
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

</body>
</html>
