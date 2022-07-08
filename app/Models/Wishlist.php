<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
      'users_id','movies_id',
    ];
    public function Movie(){
      return $this->belongsTo(Movie::class,'movies_id');
  }
  public function User(){
    return $this->belongsTo(User::class,'users_id');
}
}
