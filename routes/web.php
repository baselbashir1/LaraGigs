<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;
use App\Models\User;
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

Route::controller(ListingController::class)->group(function () {
    Route::get('/', 'index');
    Route::middleware('auth')->group(function () {
        Route::get('/listings/create', 'create');
        Route::post('/listings', 'store');
        Route::get('/listings/{listing}/edit', 'edit');
        Route::put('/listings/{listing}', 'update');
        Route::delete('/listings/{listing}', 'destroy');
        Route::get('/listings/manage', 'manage');
    });
    Route::get('/listings/{listing}', 'show'); // Single Listing
});

Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'create')->middleware('guest');
    Route::post('/users', 'store');
    Route::post('/logout', 'logout')->middleware('auth');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/users/authenticate', 'authenticate');
});
