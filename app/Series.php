<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    /**\
     * Return the Lessons in this series
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons(){
        return $this->hasMany('App\Lesson')->orderBy('position');
    }

    /**
     * Next Two Functions From: https://softonsofa.com/tweaking-eloquent-relations-how-to-get-hasmany-relation-count-efficiently/
     * @return mixed
     */
    public function lessonsCount(){
        return $this->hasOne('App\Lesson')
            ->selectRaw('series_id, count(*) as aggregate')
            ->groupBy('series_id');
    }

    /**
     * @return int
     */
    public function getLessonsCountAttribute()
    {
        // if relation is not loaded already, let's do it first
        if ( ! array_key_exists('lessonsCount', $this->relations))
            $this->load('lessonsCount');

        $related = $this->getRelation('lessonsCount');

        // then return the count directly
        return ($related) ? (int) $related->aggregate : 0;
    }


    public function getMinutesAttribute(){
        $seconds = 0;
        foreach($this->lessons as $lesson){
            $seconds += $lesson->seconds;
        }
        return floor($seconds/60);
    }
}
