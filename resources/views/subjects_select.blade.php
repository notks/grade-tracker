@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subjects') }}</div>

                <div class="card-body">
                    @foreach (Auth::user()->grades as $subject)
    {{$subject}}
    <br>
@endforeach


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
