<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;

class SeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('dev')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::where('in_development',0)->get();
        return view('series.index')->with('series',$series);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the Request
        $this->validate($request, [
            'slug' => 'required|max:255',
            'title' => 'required|max:255',
            'difficulty' => 'required|in:Beginner,Intermediate,Advanced',
            'image' => 'required|image',
            'description' => 'required',
            'seo_description' => 'required',
            'in_development' => 'required|boolean'
        ]);

        // Store in Database
        $series = new Series();
        $series->slug = $request->slug;
        $series->title = $request->title;
        $series->difficulty = $request->difficulty;
        $image_path = $request->file('image')->storeAs('series-thumbnail',$request->slug.'.'.$request->file('image')->clientExtension(),'s3');
        $series->image = 'https://d2eq5ny6p8mf5r.cloudfront.net/' . $image_path;
        $series->description = $request->description;
        $series->seo_description = $request->seo_description;
        $series->in_development = $request->in_development;
        $series->save();

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
        $series = Series::where('slug','=',$id)->first();
        return view('series.show')->with('series',$series);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $series = Series::where('slug','=',$id)->first();
        return view('series.edit')->with('series',$series);
    }

    public function editSequence($id)
    {
        $series = Series::where('slug','=',$id)->first();
        return view('series.edit-sequence')->with('series',$series);
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

        // Validate the Request
        $this->validate($request, [
            'slug' => 'required|max:255',
            'title' => 'required|max:255',
            'difficulty' => 'required|in:Beginner,Intermediate,Advanced',
            'image' => 'image',
            'description' => 'required',
            'seo_description' => 'required',
            'in_development' => 'required|boolean'
        ]);


        // Find the Series
        $series = Series::find($id);

        // Store in Database
        $series->slug = $request->slug;
        $series->title = $request->title;
        $series->difficulty = $request->difficulty;
        if($request->hasFile('image')){
            $image_path = $request->file('image')->storeAs('series-thumbnail',$request->slug.'.'.$request->file('image')->clientExtension(),'s3');
            $series->image = 'https://d2eq5ny6p8mf5r.cloudfront.net/' . $image_path;
        }
        $series->description = $request->description;
        $series->seo_description = $request->seo_description;
        $series->in_development = $request->in_development;
        $series->save();

        return redirect('series/'.$series->slug);
    }

    public function updateSequence(Request $request, $id){

        // Find the Series
        $series = Series::find($id);

        // Process the Request
        $sequence = str_getcsv($request->new_order);

        $position = 1;
        foreach($sequence as $lesson_id){
            $lesson = Lesson::find($lesson_id);
            $lesson->position = $position;
            $lesson->save();
            $position++;
        }

        return redirect('series/'.$series->slug);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
