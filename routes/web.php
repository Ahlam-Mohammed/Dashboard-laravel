<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {

    Route::prefix('dashboard')->group(function () {

        Route::get('/', function () {
            return view('dashboard.index');
        })->name('dashboard.index');

        Route::get('/landing', function () {
            return view('dashboard.landing.index');
        })->name('dashboard.landing');


        Route::get('/services', function () {
            return view('dashboard.services.index');
        })->name('dashboard.services');

        Route::get('/housing', function () {
            return view('dashboard.housing.index');
        })->name('dashboard.housing');

        Route::get('/type', function () {
            return view('dashboard.housing.type');
        })->name('dashboard.type');

        Route::get('/users', function () {
            return view('dashboard.users.index');
        })->name('dashboard.users');

        Route::get('/customers', function () {
            return view('dashboard.customer.index');
        })->name('dashboard.customer');


    });

});


require __DIR__.'/auth.php';
