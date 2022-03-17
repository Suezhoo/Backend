@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('about-me')
    <div class="d-flex flex-column align-items-center">
        <div class="card mb-3" style="max-width:540px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('assets/img/selfie.jpg')}}" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Stephan Van Hemelrijck</h5>
                        <p class="card-text">This is a description about me</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection