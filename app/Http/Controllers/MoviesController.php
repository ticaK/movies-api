<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
  
    public function index(Request $request)
    {
       $searchTerm = $request->input('title');  
       $take = $request->input('take');
       $skip = $request->input('skip');
       return Movie::search(Movie::query(),$searchTerm)->take($take)->skip($skip)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:movies,releaseDate',
            'director'=>'required',
            'duration'=>'required|min:1|max:500',
            'releaseDate'=>'required',
            'imageUrl'=>'required|url'    
        ]);
        return Movie::create($request->all());
    }

    

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title'=>'required|unique:movies,releaseDate',
            'director'=>'required',
            'duration'=>'required|min:1|max:500',
            'releaseDate'=>'required',
            'url'=>'required|url',
        ]);
        $movie->update($request->all());
        return $movie;
    }

  
    public function destroy($id)
    {
        return Movie::destroy($id);
    }
}
