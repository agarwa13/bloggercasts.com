<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;

class DownloadController extends Controller
{

	/**
	Restrict Access
	*/
    public function __construct()
    {
        $this->middleware('dev')->except('show');
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return response()->view('downloads.index',['downloads' => Download::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('downloads.create',['series' => Series::all()]);
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
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:downloads',
            'file' => 'required',
            'lesson_id' => 'required'
        ]);

        // Store in Database
        $download = new Download();
        $download->name = $request->name;
        $download->lesson_id = $request->lesson_id;
        $download->slug = $request->slug;
        $file_path = $request->file('file')->storeAs('downloads',$request->slug.'.'.$request->file('file')->clientExtension(),'s3');
        $download->file = 'https://d2eq5ny6p8mf5r.cloudfront.net/' . $file_path;
        $download->hits = 0;
        $download->save();

        // Allow the User to See what is created
        return redirect('/downloads/'.$download->slug.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $download = Download::where('slug','=',$id)->first();
        $download->hits += 1;
        $download->save();

        return redirect($download->file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $download = Download::where('slug','=',$id)->first();

        return response()->view('downloads.edit',[
            'series' => Series::all(),
            'download' => $download
        ]);
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

        $download = Download::where('slug','=',$id)->first();

        // Validate the Request
        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'lesson_id' => 'required'
        ]);

        // Store in Database
        $download->name = $request->name;
        $download->slug = $request->slug;
        $download->lesson_id = $request->lesson_id;

        if($request->has('file')){
            $file_path = $request->file('file')->storeAs('downloads',$request->slug.'.'.$request->file('file')->clientExtension(),'s3');
            $download->file = 'https://d2eq5ny6p8mf5r.cloudfront.net/' . $file_path;
        }

        $download->save();

        // Allow the See the Updated Download
        return redirect('/downloads/'.$download->slug.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Download::where('slug','=',$id)->first();
        $download->delete();

        return redirect('/downloads/create');
    }
}
