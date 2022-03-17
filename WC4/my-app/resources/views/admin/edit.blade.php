@extends('layouts.admin')
@section('content')
    <h1 class="h1 text-dark text-center">Edit advert</h1>
    <div class="container">
        <form action="{{route('ad-create')}}" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            <br>
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection