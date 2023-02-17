<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;
use App\Models\Movie;



class MainController extends Controller
{
    public function home()
    {
        // funzione per stampare a schermo i prodotti 
        $genres = Genre::all();

        return view('pages.home', compact('genres'));
        // return view('pages.home');
    }

    public function movieAll()
    {
        $movies = Movie::all();

        return view('pages.movie.all', compact('movies'));
    }
}