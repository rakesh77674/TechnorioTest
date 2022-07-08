<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function index(){
        $to = $_GET['to'];
        $from = $_GET['from'];

        // $user = WishList::with(["Movie" => function($q) use ($to,$from){
        //     $q->where('releasedate', '>=', $to)
        //     ->where('releasedate', '<=', $from);
        // },'User'])
        // ->select('title')
        // ->get();

        $user = DB::table('wishlists')
            ->join('movies', 'wishlists.movies_id', '=', 'movies.id')
            ->join('users', 'wishlists.users_id', '=', 'users.id')
            ->where('movies.releasedate', '>=', $to)
            ->where('movies.releasedate', '<=', $from)
            ->select('movies.*','users.name as userName')
            ->get();


        return view('admin.User.index',compact('user'));
    }
}
 