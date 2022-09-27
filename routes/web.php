<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControladorFoto;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rotas admin*/


Route::get('/admin', [ App\Http\Controllers\AdminController::class,'index'])->name ('home-admin') ;
Route::get('/admin/login',[ App\Http\Controllers\Auth\AdminLoginController::class,'index']) -> name ('login-admin') ;
Route::post('/admin/login',[ App\Http\Controllers\Auth\AdminLoginController::class,'login']) -> name ('login-admin-submit');
Route::post('/admin/logout',[ App\Http\Controllers\Auth\AdminLoginController::class,'logout']) -> name ('logout-admin') ;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/*
 Rotas das imagens 

Route::get('/admin', [ App\Http\Controllers\ControladorFoto::class,'index']);
Route::post('/admin',[ App\Http\Controllers\Auth\ControladorFoto::class,'store']);
Route::delete('/{id}',[ App\Http\Controllers\Auth\ControladorFoto::class,'destroy']);
Route::get('/download/{id}',[ App\Http\Controllers\Auth\ControladorFoto::class,'download']);
*/