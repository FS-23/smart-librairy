<?php

namespace App\Models;

use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable  = ["title", "author" , "description" , "categorie" , 'image'];

    public function comments(){
         return $this->hasMany(Comment::class);
    }
}
