<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::get('/', function () {
    return view('listhotel');
});

Route::resource('hotel' , HotelController::class);
Route::resource('create' , HotelController::class);

Route::get('/' , [HotelController::class, 'index']);
Route::get('hoteldetails' , [HotelController::class, 'show']);
// Route::get('create' , [HotelController::class, 'create']);
// Route::post('create' , [HotelController::class, 'store']);
Route::post('edit/{id}',[HotelController::class,'update'] );
Route::get('edit/{id}',[HotelController::class,'edit'] );
// Route::post('create' , [HotelController::class, 'store']);

