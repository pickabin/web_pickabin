<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginadminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/datatambak', function(){
    return view('penanggung_jawab.coba');
})->name('datatambak');
    

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    return view('welcome');
})->name('addPenanggungJawab');

Route::post('/konfirmasi/{index}', [RegisterController::class, 'register'])
->name('konfirmasi');

Route::get('/table', function () {
    return view('table');
});

Route::get('/loginadmin', function () {
    return view('auth/loginadmin');
});

Route::get('/admin/adduser', function () {
    return view('auth/register');
})->name('regis');

Auth::routes();

Route::get('/data_pj', function () {
    return view('admin/data_pj');
})->name('data_pj');

Route::get('/data_pj', function () {
    return view('admin/data_pj');
})->middleware('checkRole')->name('data_pj');

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])
    ->middleware('checkRole')
    ->withoutMiddleware(['guest'])
    ->name('register');

Route::post('register', [RegisterController::class, 'register'])
    ->middleware('checkRole')
    ->withoutMiddleware(['guest']);

Route::get('/datauser', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('datauser')
    ->middleware('user', 'fireauth');


// Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');

// Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::post('login/{provider}/callback', [LoginController::class, 'handleCallback']);

Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user', 'fireauth');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::resource('/img', App\Http\Controllers\ImageController::class);
