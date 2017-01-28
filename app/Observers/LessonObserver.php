<?php

namespace App\Observers;

use App\Lesson;
use Vimeo\Vimeo;

/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 11/6/2016
 * Time: 3:19 PM
 */
class LessonObserver
{

    /**
     * Listen to the Lesson Saved event.
     * Update the Title and Description on Vimeo when the Lesson is updated
     *
     * @param  Lesson  $lesson
     * @return void
     */
    public function saved(Lesson $lesson){

        $vimeo = new Vimeo(env('VIMEO_CLIENT_ID'), env('VIMEO_CLIENT_SECRET'));
        $vimeo->setToken(env('VIMEO_ACCESS_TOKEN'));

        if((string)(int)$lesson->video == $lesson->video) {

            $vimeo->request('/videos/'.$lesson->video,[
                'name' => $lesson->title,
                'description' => $lesson->seo_description
            ],'PATCH');
        }

    }


}