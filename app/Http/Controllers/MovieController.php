<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Movie = Movie::all();
       return view('admin.movie.index',compact('Movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('admin.movie.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->releasedate = $request->releasedate;
        $poster = $request->poster;
        $imageName = time().'.'.$poster->getClientOriginalExtension();
        $request->poster->move('poster', $imageName);
        $movie->poster = "/poster/".$imageName;
        $movie->description = $request->description;
        $movie->updated_by = Auth::user()->id;
        $movie->created_by = Auth::user()->id; 
        $movie->save();
        return redirect('/admin/movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Movie = Movie::find($id);
        return view("admin.movie.edit",compact('Movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->releasedate = $request->releasedate;
        $poster = $request->poster;
        $imageName = time().'.'.$poster->getClientOriginalExtension();
        $request->poster->move('poster', $imageName);
        $movie->poster = "/poster/".$imageName;
        $movie->description = $request->description;
        $movie->updated_by = Auth::user()->id;
        $movie->created_by = Auth::user()->id; 
        $movie->save();
        return redirect('/admin/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::find($id)->delete();
        return Redirect("/admin/movie");
    }
}
