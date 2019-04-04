<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
  
    public function index()
    {
       return Movie::all();
    }

    public function store(Request $request)
    {
        return Movie::create($request->all());
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        return $movie;
    }

  
    public function destroy($id)
    {
        return Movie::destroy($id);
    }
}
