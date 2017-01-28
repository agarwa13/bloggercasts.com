<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;

class AffiliateController extends Controller
{
    

	/*
	Restrict access
	*/    
	public function __construct(){
		$this->middleware('dev')->except('show');
	}

	/*
	Search for Affiliates based on the given query
	*/
	public function search(Request $request){

		$query = str_replace('*', '%', $request->input('query'));

        return Affiliate::where(function ($search) use ($query) {
	        $search->where('name', 'like', $query)
    	           ->orWhere('slug', 'like', $query)
    	           ->orWhere('link', 'like', $query);
    	})->get();
	}


	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('affiliates.index',['affiliates' => Affiliate::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('affiliates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:affiliates',
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'portal' => 'required|max:255|url',
            'email' => 'required|max:255|email',
            'link' => 'required|max:255|url'
        ]);

        $affiliate = new Affiliate();
        $affiliate->slug = $request->slug;
        $affiliate->name = $request->name;
        $affiliate->username = $request->username;
        $affiliate->password = $request->password;
        $affiliate->portal = $request->portal;
        $affiliate->email = $request->email;
        $affiliate->link = $request->link;
        $affiliate->hits = 0;
        $affiliate->save();

        $request->session()->flash('success',$affiliate->name.' was successfully added');

        return redirect('affiliates/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $affiliate = Affiliate::where('slug','=',$id)->first();
        $affiliate->hits += 1;
        $affiliate->save();

        return redirect($affiliate->link);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $affiliate = Affiliate::where('slug','=',$id)->first();
        return view('affiliates.edit')->with('affiliate',$affiliate);
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
        $affiliate = Affiliate::where('slug','=',$id)->first();

        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'portal' => 'required|max:255|url',
            'email' => 'required|max:255|email',
            'link' => 'required|max:255|url'
        ]);

        $affiliate->slug = $request->slug;
        $affiliate->name = $request->name;
        $affiliate->username = $request->username;
        $affiliate->password = $request->password;
        $affiliate->portal = $request->portal;
        $affiliate->email = $request->email;
        $affiliate->link = $request->link;
        $affiliate->hits = 0;
        $affiliate->save();

        return redirect('affiliates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affiliate = Affiliate::where('slug','=',$id)->first();
        $affiliate->delete();

        return redirect('affiliates');

    }

}
