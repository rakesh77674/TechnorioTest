<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WishList;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
     'title','description','poster','releasedate','published',
    ];
    public function wishlist(){
        return $this->hasMany(WishList::class);
    }
}
