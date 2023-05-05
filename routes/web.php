<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OccasionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PlacesController;

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

Route::get('/', [OccasionController::class, 'show']);

Route::get('/event/{occasion}', [EventController::class, 'show']);

Route::get('/event/{event}/places', [PlacesController::class, 'show']);

Route::get('/event/{event}/book/{place}', [PlacesController::class, 'book']);

Route::post('/event/booking', [PlacesController::class, 'store']);

