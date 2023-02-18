<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\TpackageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksidtController;

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

Route::get('/dashboard', DashboardController::class)->name('dashboard');

require __DIR__.'/auth.php';

//admin all route
Route::controller(AdminController::class)->group(function(){
Route::get('/admin/logout','destroy')->name('admin.logout');
Route::get('/admin/profile','profile')->name('admin.profile');
Route::get('/edit/profile','EditProfile')->name('edit.profile');
Route::post('/store/profile','StoreProfile')->name('store.profile');
Route::get('/change/password','ChangePassword')->name('change.password');
Route::post('/update/password','UpdatePassword')->name('update.password');
//end admin route

Route::resource('package', TpackageController::class);
Route::resource('foto', FotoController::class);
Route::resource('user', UserController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('detail', TransaksidtController::class);
Route::get('/pdf',[TransaksidtController::class, 'pdf'])->name('detail.pdf');
Route::get('/excel',[TransaksidtController::class, 'excel'])->name('detail.excel');
});
