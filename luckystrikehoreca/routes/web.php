<?php

use App\Http\Controllers\CateringController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Route::get('/header', function () {
    return view('header');
});

Auth::routes();

Route::get('/horeca', [CateringController::class, 'getCateringItems']);
Route::get('/test', [CateringController::class, 'getCateringItemsTest']);

Route::get('/home', [CateringController::class, 'getCateringItems'])->name('home');

Route::get('/order', function () {
    return view('order');
});