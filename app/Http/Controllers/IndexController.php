<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('Home.index');
        
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
