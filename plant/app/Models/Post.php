<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Post extends Model
{
    use Commentable;
    protected $fillable = ['title', 'description'];

}
