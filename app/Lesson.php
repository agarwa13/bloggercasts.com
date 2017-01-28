<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * Return the Series associated with this Lesson
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function series(){
        return $this->belongsTo('App\Series');
    }
}
