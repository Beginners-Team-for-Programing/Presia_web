<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeginnerController;

use App\Http\Controllers\ContactController;

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

Route::get('/recruit', function () {
    return view('recruit');
});


Route::get('/privacy', function () {
    return view('privacy');
});


Route::get('/', [ContactController::class, 'get']);
Route::post('/', [ContactController::class, 'confirm']);
