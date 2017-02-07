<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoViews extends Model
{
    protected $fillable = ['lesson_id','user_id','percent_played','duration_played'];
}
