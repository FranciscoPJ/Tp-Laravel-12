<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'poster', 'habilitated', 'content', 'id_user', 'id_category'];
}
