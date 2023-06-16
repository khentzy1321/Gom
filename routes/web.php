<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/about', function () {
    return view('abouts.index');
});
Route::resource('allchurchs','App\Http\Controllers\AllChurchWebController');
Route::get('/allevents', [EventsController::class, 'allevents'])->name('allevents.index');




Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('events','App\Http\Controllers\EventsController');
Route::get('/dashboardadmin', [DashboardAdminController::class, 'index'])->name('dashboard.index');
Route::resource('churchs','App\Http\Controllers\ChurchCategoryController');
Route::resource('churchsinfo','App\Http\Controllers\ChurchInfoController');
});


