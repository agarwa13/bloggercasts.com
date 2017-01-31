<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Series;
use App\Lesson;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('dev')->except('show','showAMP');
        $this->middleware('setLessonsViewedCookie')->only('show','showAMP');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lessons.index')->with('lessons',Lesson::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Series::all();
        return view('lessons.create')->with('series',$series);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Request
        $this->validate($request,[
            'slug' => 'required|max:255',
            'free' => 'required|boolean',
            'video' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',
            'seo_description' => 'required',
            'series_id' => 'required|exists:series,id',
            'seconds' => 'required|integer',
            'open_graph_image' => 'image'
        ]);

        // Store in Database
        $lesson = new Lesson();
        $lesson->slug = $request->slug;
        $lesson->free = $request->free;
        $lesson->video = $request->video;
        $lesson->title = $request->title;
        $lesson->description = $request->description;
        $lesson->seo_description = $request->seo_description;
        $lesson->transcript = $request->transcript;
        $lesson->series_id = $request->series_id;
        $lesson->seconds = $request->seconds;

        if($request->hasFile('open_graph_image')){
            $image_path = $request->file('open_graph_image')->storeAs('lesson-thumbnail',$request->slug.'.'.$request->file('open_graph_image')->clientExtension(),'s3');
            $lesson->open_graph_image = 'https://d2eq5ny6p8mf5r.cloudfront.net/' . $image_path;
        }

        // Set the Lessons Position to the Largest in the Series.
        $series = Series::find($request->series_id);
        $lesson->position = 1;
        foreach($series->lessons as $current_lesson){
            if($lesson->position <= $current_lesson->position){
                $lesson->position = $current_lesson->position + 1;
            }
        }

        $lesson->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::where('slug','=',$id)->first();
        return view('lessons.show')->with('lesson',$lesson);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAMP($id)
    {
        $lesson = Lesson::where('slug','=',$id)->first();
        return view('lessons.amp.show')->with('lesson',$lesson);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::where('slug','=',$id)->first();
        $series = Series::all();
        return view('lessons.edit')->with('lesson',$lesson)->with('series',$series);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Find the Lesson To Be Updated
        $lesson = Lesson::find($id);

        // Validate the Input
        $this->validate($request,[
            'slug' => 'required|max:255',
            'free' => 'required|boolean',
            'video' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',
            'seo_description' => 'required',
            'series_id' => 'required|exists:series,id',
            'seconds' => 'required|integer',
            'open_graph_image' => 'image'
        ]);

        // Update the Lesson
        $lesson->slug = $request->slug;
        $lesson->free = $request->free;
        $lesson->video = $request->video;
        $lesson->title = $request->title;
        $lesson-> description = $request->description;
        $lesson->seo_description = $request->seo_description;
        $lesson->transcript = $request->transcript;
        $lesson->series_id = $request->series_id;
        $lesson->seconds = $request->seconds;

        if($request->hasFile('open_graph_image')){
            $image_path = $request->file('open_graph_image')->storeAs('lesson-thumbnail',$request->slug.'.'.$request->file('open_graph_image')->clientExtension(),'s3');
            $lesson->open_graph_image = 'https://d2eq5ny6p8mf5r.cloudfront.net/' . $image_path;
        }

        $lesson->save();

        return redirect('/lessons/'.$lesson->slug);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        $series_slug = $lesson->series->slug;
        $lesson->delete();

        return redirect()->action('SeriesController@show',['slug' => $series_slug]);
    }
}
