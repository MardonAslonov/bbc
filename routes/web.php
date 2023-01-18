<?php

use App\Http\Controllers\BbcController;
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

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/userTable',[BbcController::class,'userTable'])->name('userTable');

Route::get('/a', function () {
    return view('a');
})->name('a');

Route::get('/peopleTable',[BbcController::class,'peopleTable'])->name('peopleTable');
Route::get('/userCreate',[BbcController::class,'userCreate'])->name('userCreate');
Route::post('/createInfo',[BbcController::class,'createInfo'])->name('createInfo');
