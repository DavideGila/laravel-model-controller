@extends('layouts.app')

@section('title', '$book->title')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 gy-4">
            <div class="card w-50">
                <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
