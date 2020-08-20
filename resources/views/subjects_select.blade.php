@extends('layouts.app')

@section('content')

<div>
    @foreach ($subjects as $subject)
        {{$subject->subject}}
        <br>
    @endforeach
</div>


@endsection
