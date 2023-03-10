<?php

use Illuminate\Support\Facades\Route;

use App\Models\Listing;
use PhpParser\Node\Expr\List_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/single/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
})->where('id', '[0-9]+');
