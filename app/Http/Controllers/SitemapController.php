<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lesson;
use App\Series;


class SitemapController extends Controller
{
    /*
     * Display the Main Sitemap
     */
    public function index()
    {
        $series = Series::orderBy('updated_at','desc')->first();
        $lesson = Lesson::orderBy('updated_at','desc')->first();

        return response()->view('sitemap.index',[
            'series' => $series,
            'lesson' => $lesson
        ])->header('Content-Type','text/xml');
    }


    /*
    * Display the General Sitemap
    */
    public function general()
    {
        return response()->view('sitemap.general')->header('Content-Type','text/xml');
    }

    /*
     * Display the Lessons Sitemap
     */
    public function lessons()
    {

        $lessons = Lesson::all();

        return response()->view('sitemap.lessons',[
            'lessons' => $lessons
        ])->header('Content-Type','text/xml');

    }


    /*
     * Display the AMP Sitemap
     */
    public function amp()
    {
        $lessons = Lesson::all();

        return response()->view('sitemap.amp',[
            'lessons' => $lessons
        ])->header('Content-Type','text/xml');

    }

    /*
     * Display the Series Sitemap
     */
    public function series()
    {

        $series = Series::all();

        return response()->view('sitemap.series',[
            'series' => $series
        ])->header('Content-Type','text/xml');

    }


    /*
     * Display the Videos Sitemap
     */
    public function videos()
    {
        $lessons = Lesson::where('seconds','>',0)->get();

        return response()->view('sitemap.videos',[
            'lessons' => $lessons
        ])->header('Content-Type','text/xml');

    }
}
