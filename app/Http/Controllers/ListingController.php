<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use  Illuminate\Validation\Rule;
class ListingController extends Controller
{
    //All listings
    public function showAll()
    {
        return view('listings.listings',[
        'heading' => 'Latest Listings',
            'listings'=> Listing::latest()->filter(request(['tag', 's']))->get()
        ]
    );
    }

    //Show single listings
    public function show(Listing $listing)
    {
         return view('listings.listing',[
            'listing'=> $listing
        ]);
    }

    //Show single listings
    public function store(Request $request)
    {
        $formFields = $request->validate([
           'title'=>'required',
           'company'=>['required', Rule::unique('listings', 'company')],
           'location'=>'required',
           'website'=>'required',
           'email'=>['required', 'email'],
           'tags'=>'required',
           'description'=>'required'
        ]);
        return redirect('/');
    }

    //Create listings forms
    public function create(Listing $listing)
    {
         return view('listings.create');
    }
}
