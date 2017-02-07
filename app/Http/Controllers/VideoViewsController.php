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

        // Find or Create New Database Record
        $videoView = VideoViews::firstOrNew(
            [
                'lesson_id' => $request->lesson_id,
                'user_id' => $request->user()->id
            ]
        );

        // Update the Duration Played and Percent Played
        $videoView->duration_played = max($request->duration_played, $videoView->duration_played);
        $videoView->percent_played = max($request->percent_played, $videoView->percent_played);

        // Persist to Database
        $videoView->save();

        // Return with a Json Response, Status 200
        return response()
            ->json(['success' => true]);

    }
}
