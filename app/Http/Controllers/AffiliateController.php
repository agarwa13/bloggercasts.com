<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Affiliate;

class AffiliateController extends Controller
{
    
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

}
