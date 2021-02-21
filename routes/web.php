<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

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

Route::get('/', [FrontController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::resource('dashboard', AdminController::class);

    Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
        Route::resource('books', BookController::class);
    });
});


//require __DIR__.'\auth.php';