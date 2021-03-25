@extends('layout')

@section('title', $title.' di Beeflix')

@section('body')
    <div class="movie">
        <img class="movie-overlay animated fadeIn" style="z-index: 0;" src="{{$photo}}">
        <div class="container py-5">
            <h1 style="z-index: 10; position: relative; font-weight: 700;font-size: 40px">{{$title}}</h1>
            <div class="d-flex flex-wrap mt-5">
                @foreach($movies as $movie)
                    @include('card',['movie' => $movie])
                @endforeach
            </div>
        </div>
    </div>
@endsection
