<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ListingController extends Controller
{
  //All listings
  public function showAll() {
    return view('listings.listings', [
      'heading' => 'Latest Listings',
      'listings' => Listing::latest()->filter(request(['tag', 's']))->paginate(10)
    ]
    );
  }

  //Show single listings
  public function show(Listing $listing) {
    return view('listings.listing', [
      'listing' => $listing
    ]);
  }

  //Show single listings
  public function store(Request $request) {
    $formFields = $request->validate([
      'title' => 'required',
      'company' => ['required', Rule::unique('listings', 'company')],
      'location' => 'required',
      'website' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'description' => 'required'
    ]);
    //return
    if ($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    if (Listing::create($formFields)) {
      return redirect('/listings/create')->with('success', 'Lisiting created successfully');
    }
  }

  //Create listings forms
  public function create(Listing $listing) {
    return view('listings.create');
  }

  //Edit listings forms
  public function edit(Listing $listing) {
    return view('listings.edit', ['listing' => $listing]);
  }

  //Update a single listing
  public function storeupdate(Request $request, Listing $listing) {
    $formFields = $request->validate([
      'title' => 'required',
      'company' => ['required'],
      'location' => 'required',
      'website' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'description' => 'required'
    ]);
    //return
    if ($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    if ($listing->update($formFields)) {
      return back()->with('success', 'Lisiting update successfully');
    }
  }

  //Delete a single listing
  public function storedelete(Request $request, Listing $listing) {
    if ($listing->delete($listing->id)) {
      return redirect('/')->with('success', 'Lisiting deleted successfully');
    }
  }


}