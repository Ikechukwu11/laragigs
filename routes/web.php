<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//use \App\Models\Listing;
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

Route::get('/', [ListingController::class, 'showAll']);

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
Route::post('/listings/', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'storeupdate'])->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'storedelete'])->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/register', [UserController::class, 'registerform'])->middleware('guest');

Route::post('/users', [UserController::class, 'createuser']);

Route::get('/login', [UserController::class, 'loginform'])->name('login')->middleware('guest');
Route::post('users/authenticate', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

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
