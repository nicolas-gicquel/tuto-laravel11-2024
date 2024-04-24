<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

     // nom de la fonction au singulier car 1 seul user en relation
    // cardinalité 1,1
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // nom au pluriel car un message peut regrouper plusieurs commentaires
    // cardinalité 0,n
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}
