@extends('layouts.master')

@section('content')
    <div class="card-container d-flex flex-column align-items-center">
        <div class="card text-center text-white bg-dark w-50">
            <div class="card-body ">
                <h5 class="card-title">{{ $info['title'] }}</h5>
                <p class="card-text text-secondary">{{$info['description']}}</p>
            </div>
        </div>
    </div>
@endsection
