<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        $to = $_GET["to"] ?? null ;
        $from = $_GET["from"] ?? null ;
        
        $user = DB::table('wishlists')
            ->join('movies', 'wishlists.movies_id', '=', 'movies.id')
            ->join('users', 'wishlists.users_id', '=', 'users.id');

        if ($to) {
            $user = $user->where('movies.releasedate', '>=', $to);
        }

        if ($from) {
            $user = $user->where('movies.releasedate', '<=', $from);
        }
       $user = $user->select('movies.*', 'users.name as userName')->get();
       return view('admin.User.index', compact('user'));
    }
   
}