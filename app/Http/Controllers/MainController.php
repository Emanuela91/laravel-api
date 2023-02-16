<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;


class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}