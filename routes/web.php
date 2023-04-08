<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CulinerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\CulinaryController as CulinaryAdminController;
use App\Http\Controllers\Admin\DashboardController as DashboardAdminController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryAdminController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kuliner', [CulinerController::class, 'index'])->name('kuliner');
Route::get('/kuliner/detail', [CulinerController::class, 'detail'])->name('kuliner-detail');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/detail', [EventController::class, 'detail'])->name('event-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard/culinary', [CulinaryController::class, 'index'])->name('dashboard-culinary');


Route::prefix('admin')
    // ->middleware(['auth', 'admin']) 
    ->group(function(){
        Route::get('/', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
        Route::resource('culinary', CulinaryAdminController::class);
        Route::resource('event', EventAdminController::class);
        Route::resource('category', CategoryAdminController::class);
});


Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
