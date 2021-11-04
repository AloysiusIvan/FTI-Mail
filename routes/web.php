<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\ArsipController;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::post('/addsurat', [SuratController::class,'store'])->name('addsurat');
Route::delete('deletesurat/{id}', [SuratController::class,'destroy'])->name('deletesurat');
Route::post('updatesurat/{id}', [SuratController::class,'update'])->name('updatesurat');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/arsip', [ArsipController::class,'index'])->name('arsip');
    Route::get('/surat', [SuratController::class,'index'])->name('surat');
});