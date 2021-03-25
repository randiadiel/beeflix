@extends('layout')

@section('title', $movie->title)

@section('body')
    <div class="movie">
        <img class="movie-overlay animated fadeIn" src="{{$movie->photo}}">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid w-100 d-none d-sm-block" src="{{$movie->photo}}">
                </div>
                <div class="col-md-8">
                    <h1>{{$movie->title}}</h1>
                    @for($i = 0; $i < $movie->rating; $i++)
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    @endfor
                    @for($i = 0; $i < 5-$movie->rating; $i++)
                        <i class="fa fa-star text-black-50" aria-hidden="true"></i>
                    @endfor
                    <p class="mt-2">{{$movie->description}}</p>
                    <p>Kategori : <a href="/genre/{{$movie->genre->id}}">{{$movie->genre->name}}</a></p>
                    <h3>Episodes</h3>
                    <table class="table table-striped table-transparent text-light">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Episodes Title</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($episodes as $episode)
                            <tr>
                                <td>{{$episode->episode}}</td>
                                <td>{{$episode->title}}</td>
                                <td><button class="btn btn-primary">Watch</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$episodes->withQueryString()->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
