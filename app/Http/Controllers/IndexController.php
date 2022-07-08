<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $movie = Movie::all();
        return view('Home.index',compact('movie'));
        
    }
    public function adminhome(){
        $usertype = Auth::user()->usertype;
        if($usertype=='1'){
            return view('dashboard');
        }
        else{
            return redirect('/');
        }
    }
}
