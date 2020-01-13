<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseEloquent;

class Post extends BaseEloquent
{
    //
    protected $fillable = [
        'title',
        'content'
    ];
}
