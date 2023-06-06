<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CulinerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Admin\FoodController as FoodAdminController;
use App\Http\Controllers\Admin\UserController as UserAdminController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\RestoController as RestoAdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryAdminController;
use App\Http\Controllers\Admin\DashboardController as DashboardAdminController;
use App\Http\Controllers\Admin\FoodGalleryController as FoodGalleryAdminController;
use App\Http\Controllers\Admin\EventGalleryController as EventGalleryAdminController;
use App\Http\Controllers\Admin\RestoGalleryController as RestoGalleryAdminController;
use App\Http\Controllers\Admin\ReviewController as ReviewAdminController;

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
Route::get('/mappu', [HomeController::class, 'index2'])->name('mappu');
Route::get('/kuliner', [CulinerController::class, 'index'])->name('kuliner');
Route::get('/kuliner/{id}', [CulinerController::class, 'detail'])->name('kuliner-detail');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/{id}', [EventController::class, 'detail'])->name('event-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');




// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard/culinary', [CulinaryController::class, 'index'])->name('dashboard-culinary');


Route::group(['middleware' => ['auth']], function(){
   Route::post('/review/{id}', [ReviewController::class, 'postReview'])->name('review');
});


Route::prefix('admin')
    // ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
        Route::resource('food', FoodAdminController::class);
        Route::resource('food-gallery', FoodGalleryAdminController::class);
        Route::resource('resto', RestoAdminController::class);
        Route::resource('resto-gallery', RestoGalleryAdminController::class);
        Route::resource('event', EventAdminController::class);
        Route::resource('event-gallery', EventGalleryAdminController::class);
        Route::resource('category', CategoryAdminController::class);
        Route::resource('user', UserAdminController::class);
        // Route::resource('review', ReviewAdminController::class);
        Route::get('/review', [ReviewAdminController::class, 'index'])->name('review.index');
        Route::get('/review/approve/{id}', [ReviewAdminController::class, 'approve'])->name('review.approve');
        Route::delete('/review/destroy/{id}', [ReviewAdminController::class, 'destroy'])->name('review.destroy');
});


Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
