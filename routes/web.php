<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PowerConsumptionController;
use App\Http\Controllers\CSVController;
use Illuminate\Contracts\Cache\Store;

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
//probstat
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/showdata', function () {
    return view('showdata');
});
Route::get('/inputdata', function () {
    return view('inputdata');
});
Route::get('/out', function () {
    return view('out');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/cek', function () {
    return view('showdataset');
});
Route::get('/inputdataset', function () {
    return view('inputdataset');
});
Route::get('/showdataset3', function () {
    return view('showdataset3');
});

route::get('/showdataset', [PowerConsumptionController::class, 'index']);

Route::get('/upload', [CSVController::class, 'showUploadForm']);
Route::post('/upload', [CSVController::class, 'upload']);
