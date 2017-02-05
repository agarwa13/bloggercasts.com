<?php

namespace App\Http\Controllers;

use App\VideoViews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoViewsController extends Controller
{
    public function recordVideoViewed(Request $request){

        if(!$request->ajax()){
            // Throw Error
            abort(403,'Expecting AJAX Request');
        }

        if(!Auth::check()){
            // Throw Error
            abort(403,'Expecting Authenticated User');
        }

        /**
         * Columns in Database:
         * User ID
         * Video ID
         * Duration Played
         * Percent Played
         * Date Created
         * Date Updated
         */

        // Add or Update Database Record
        $videoView = VideoViews::updateOrCreate(
            [
                'lesson_id' => $request->lesson_id,
                'user_id' => $request->user()->id
            ],
            [
                'duration_played' => $request->duration_played,
                'percent_played' => $request->percent_played
            ]
        );

        // Return with a Json Response, Status 200
        return response()
            ->json(['success' => true]);

    }
}
