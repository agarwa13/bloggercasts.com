<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lesson extends Model
{
    /**
     * Return the Series associated with this Lesson
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function series(){
        return $this->belongsTo('App\Series');
    }

    /**
     * Return the Collection of Users that have watched this lesson
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function watchedBy(){
        return $this->belongsToMany('App\User','video_views')
            ->withPivot('duration_played','percent_played');
    }

    /**
     * Check if the Lesson is Completed by the Authenticated User
     */
    public function completed(){
        if(!Auth::check()){
            return false;
        }

        $completed = VideoViews::where('lesson_id','=',$this->id)
            ->where('user_id','=',Auth::user()->id)
            ->where('video_views.percent_played','=',100)
            ->count();

        return $completed;
    }
}
