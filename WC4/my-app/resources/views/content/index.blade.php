@extends('layouts.master')

@section('content')
    <div class="card-container d-flex flex-column align-items-center">
        <div class="card text-center text-white bg-dark w-50">
            <div class="card-body">
                <h5 class="card-title">Calisthenics</h5>
                <p class="card-text text-secondary">Workout with your own body weight</p>
                <a href="{{route('ad',['id'=>1])}}" class="btn btn-primary">Details</a>
            </div>
        </div>
        <hr>
        <div class="card text-center text-white bg-dark w-50">
            <div class="card-body">
                <h5 class="card-title">Cycling</h5>
                <p class="card-text text-secondary">Rather casual cycling. Good way to get fit!</p>
                <a href="{{route('ad',['id'=>2])}}" class="btn btn-primary">Details</a>
            </div>
        </div>
        <hr>
        <div class="card text-center text-white bg-dark w-50">
            <div class="card-body ">
                <h5 class="card-title">Functional threshold power</h5>
                <p class="card-text text-secondary">This is basically how hard you can cycle for 1 hour</p>
                <a href="{{route('ad',['id'=>3])}}" class="btn btn-primary">Details</a>
            </div>
        </div>
    </div>
@endsection
