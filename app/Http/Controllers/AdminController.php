<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;

class AdminController extends Controller
{
    public function index(){
        $user = WishList::with('Movie','User')->get();
        return view('admin.User.index',compact('user'));
    }
}
