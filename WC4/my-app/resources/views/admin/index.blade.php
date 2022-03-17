@extends('layouts.admin')
@section('content')
    <div class="card-container d-flex flex-column align-items-center w-50 m-auto">
        <a href="{{route('admin-create')}}" class="btn btn-primary my-2 align-self-end" role="button">Create</a>
        {{--Control on session--}}
        @if(session('formInput'))
            <div class="alert alert-success" role="alert">
                Advert successfully created: {{ session('formInput') }}
            </div>
        @endif
        <div class="card text-center text-white bg-dark w-100">
            <div class="card-body">
                <h5 class="card-title">Calisthenics</h5>
                <p class="card-text text-secondary">Workout with your own body weight</p>
                <a href="{{route('admin-edit')}}" class="btn btn-primary" role="button">Edit</a>
            </div>
        </div>
    </div>
@endsection