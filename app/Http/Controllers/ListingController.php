<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //All listings
    public function showAll()
    {
        return view('listings.listings',[
        'heading' => 'Latest Listings',
            'listings'=> Listing::latest()->filter(request(['tag']))->get()
        ]
    );
    }

    //Show single listings
    public function show(Listing $listing)
    {
         return view('listings.listing',[
            'listing'=> $listing
        ]
    );
    }

}
