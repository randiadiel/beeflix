<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function welcome()
    {
        $movies = Movie::all()->sortByDesc('accessed');
        $genres = Genre::all();
        return view('welcome',['movies' => $movies, 'genres' => $genres]);
    }

    public function detail($id){
        $movie = Movie::find($id);
        $movie->accessed++;
        $movie->save();
        $episodes = Episode::where('movie_id','=',$movie->id)->paginate(3);
        return view('movie',['movie' => $movie,'episodes' => $episodes]);
    }

    public function all(){
        $movies = Movie::all()->sortByDesc('accessed');
        $photo = $movies->shuffle()->first()->photo;
        return view('secondary',['movies' => $movies,'photo'=>$photo, 'title' => 'Semua Film']);
    }
}
