<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PsicologoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RefugioController;
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
    return view('auth.login');
});

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Route::resource('psicologos','App\Http\Controllers\PsicologoController');
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('refugios','App\Http\Controllers\RefugioController');


