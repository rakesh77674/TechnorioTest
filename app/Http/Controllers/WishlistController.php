<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WishlistController extends Controller

{
    public function __construct()
{
    $this->middleware('auth');
}
    public function wishListShow($movies_id){
    $wish = WishList::where('movies_id',$movies_id)->where('users_id',Auth::id())->first();
    if(isset($wish)){
        Session::flash('message','movie wishlist is already exists');
         return redirect()->back();
    }else{
        Wishlist::insert([
            'users_id'=>Auth::id(),
            'movies_id'=>$movies_id
        ]);
    }
       Session::flash('message','Movie wishlist is added sucessfully');
        return redirect()->back();
     
    }
    public function WishListShowCount($id){
      
        $wishListcount = WishList::count($id);
        return view('wishlist.index',compact('wishListcount'));
    }
    public function wishlist(){
        $users = Auth::user();
      $wishlist = Wishlist::where("users_id", "=", $users->id)->get();
        return view('wishlist.index',compact('wishlist'));
    }
}
