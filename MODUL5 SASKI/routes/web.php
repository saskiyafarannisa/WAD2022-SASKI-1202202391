<?php

use App\Http\Controllers\ShowroomController;
use Illuminate\Support\Facades\Route;


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

Route::get('/showroom', function () {
    return view('showroom.index');
});

Route::get('/sqlconn', function () {
    return view('sqlconn');
});

Route::get('/create', function () {
    return view('showroom.create');
});

Route::resource('showroom', ShowroomController::class);