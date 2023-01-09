<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();

        //dd($movies);
        return view('home', compact('movies'));
    }

    public function series(){

        return view('serie-tv');
    }

    public function login(){

        return view('login');
    }

    public function details($id){
        $movie = Movie::find($id);

        if(is_null($movie)){
            abort(404);
        }

        return view('details', compact('movie'));
    }
}
