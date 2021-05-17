<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/payment', function(){ return view('admin.payment');})->name('Payment');
Route::get('/service-requested', function(){ return view('admin.service-request');})->name('Service Requested');
Route::get('/apartment', function(){ return view('admin.apartment');})->name('Apartment');
Route::get('logout',[UserController::Class, 'logout']);
