@extends('layouts.app')

@section('title', 'All Books')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-3 gy-4">
            <div class="card">
                <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <a href="{{route('movies.show', $movie->id)}}" class="btn btn-primary">More info</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
