<?php

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

//Route::get('/', function () {
//    return view('filter');
//});

Route::post('/filters', 'FilterController@store');
Route::put('/filters/{id}', 'FilterController@update');


Route::get('/', [\App\Http\Controllers\RecordController::class, 'index']);

Route::get('/records/filter', [\App\Http\Controllers\RecordController::class, 'filter']);
Route::get('/filter-data', [\App\Http\Controllers\RecordController::class, 'filterData']);
Route::post('/records/store', [\App\Http\Controllers\RecordController::class, 'add']);
Route::put('/records/update', [\App\Http\Controllers\RecordController::class, 'update']);
