<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use \App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class,'showAll']);
Route::get('/listings/create', [ListingController::class,  'create']);
Route::post('/listings/', [ListingController::class,  'store']);
Route::get('/listings/{listing}', [ListingController::class,  'show']);

/*Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
            'listings'=> Listing::all()
        ]
    );
});

Route::get('/listings/{id}', function ($id) {
    return view('listing',[
            'listing'=> Listing::find($id)
        ]
    );
});

Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing',[
            'listing'=> $listing
        ]
    );
});*/
