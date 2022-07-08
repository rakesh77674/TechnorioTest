<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\FilterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[IndexController::class,'index'])->name('/');
Route::get('/adminhome',[IndexController::class,'adminhome'])->name('/adminhome');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
Route::get('/admin/movie',[MovieController::class,'index'])->name('/admin/movie');
Route::get('/admin/addMovie',[MovieController::class,'create'])->name('/admin/addMovie');
Route::post('/admin/storeMovie',[MovieController::class,'store'])->name('/admin/storeMovie');
Route::post('/admin/edit/{id}',[MovieController::class,'edit'])->name('edit.index');
Route::delete('/admin/delete/{id}',[MovieController::class,'destroy'])->name('destroy.index');
Route::put('/admin/update/{id}',[MovieController::class,'update'])->name('update.movie');
Route::get('/admin/User',[Admincontroller::class, "index"])->name('/admin/User');
});
Route::get('/wish-list/{id}',[WishlistController::class,'WishListShow'])->name('wishListShow');
Route::get('/wish-list-count/{id}',[WishlistController::class,'WishListShowCount'])->name('wishListShowCount');
Route::get('/wishlist-component',[WishlistController::class,'wishlist'])->name('movie.wishlist');



