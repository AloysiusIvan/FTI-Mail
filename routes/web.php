<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\SuratAdminController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\DashboardController;

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
Route::post('updatesuratarsip/{id}', [SuratController::class,'edit'])->name('updatesuratarsip');
Route::post('tolaksurat/{id}', [SuratAdminController::class,'destroy'])->name('tolaksurat');
Route::post('tolaksuratkeluar/{id}', [SuratKeluarController::class,'destroy'])->name('tolaksuratkeluar');
Route::post('prosessurat/{id}', [SuratAdminController::class,'store'])->name('prosessurat');
Route::post('updatesuratkeluar/{id}', [SuratKeluarController::class,'update'])->name('updatesuratkeluar');
Route::post('createsurat/{id}', [SuratKeluarController::class,'edit'])->name('createsurat');
Route::get('cetaksurat/{id}', [ArsipController::class,'cetak'])->name('cetaksurat');
Route::get('viewpeserta/{id}', [SuratController::class,'viewpeserta'])->name('viewpeserta');
Route::post('addpeserta/{id}', [SuratController::class,'addpeserta'])->name('addpeserta');
Route::get('viewupdatepeserta/{id}', [SuratController::class,'viewupdatepeserta'])->name('viewupdatepeserta');
Route::post('/addsuratadmin', [SuratController::class,'storeadmin'])->name('addsuratadmin');

Route::group(['middleware' => ['auth']], function(){
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/arsip', [ArsipController::class,'index'])->name('arsip');
    Route::get('/surat', [SuratController::class,'index'])->name('surat');
    Route::get('/suratadmin', [SuratAdminController::class,'index'])->name('suratadmin');
    Route::get('/suratkeluar', [SuratKeluarController::class,'index'])->name('suratkeluar');
});