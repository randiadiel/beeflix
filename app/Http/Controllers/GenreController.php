<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function detail($id){
        $genre = Genre::all()->find($id);
        $movies = Movie::all()->where('genre_id','=',$genre->id)->sortByDesc('accessed');
        $photo = $movies->shuffle()->first()->photo;
        return view('secondary',['photo' => $photo, 'movies' => $movies, 'title' => $genre->name]);
    }
}
