<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
    { 
        
        
        ##################################### Dashboard User #################################
        Route::get('/dashboard/user', function () {
            return view('dashboard.user.dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard.user');
        ##################################### End Dashboard User #################################
        ##################################### Dashboard Admin ################################
        Route::get('/dashboard/admin', function () {
            return view('dashboard.Admin.dashboard');
        })->middleware(['auth:admin', 'verified'])->name('dashboard.admin');
        ##################################### End Dashboard Admin #################################
        Route::middleware(['auth:admin', 'verified'])->name('dashboard.')->group(function(){
        Route::get('dashboard/index',[DashboardController::class,'index'])->name('index');
            Route::resource('/sections', SectionController::class);

    });
    
    
    
    require __DIR__.'/auth.php';
    });



