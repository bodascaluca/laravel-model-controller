<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index() {
        $movies= Movie::all();
        // dd($movies);
        // $data =[
        //     'movie'=> $movies
        // ]; 
        // dd($movies);
        return view('movies', compact('movies'));
    }
}
