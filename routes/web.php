<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Session; 
use App\Http\Controllers\HomeController;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */   
    Route::get('/', [HomeController::class, 'index']);

    Route::group(['middleware' => ['web']], function () {
        // Route::get('/lang',[LanguageController::class , 'change'])->name('user.lang');
        /**
         * languaje Route
         */ 
        Route::get('/lang/{lang}', function( string $lang) {

            if ( in_array($lang, ['en', 'es', 'fr'])) {
                Session::put('locale', $lang); 
                
            }   
            return redirect()->back();

        })->name('user.lang');
    });

    Route::group(['middleware' => ['guest']], function() {

        
        /**
         * Register Routes
         */
        Route::get('/register', [AuthController::class, 'showRegistrationForm']);
        Route::post('/register', [AuthController::class, 'register'])->name('register');

        /**
         * Login Routes
         */
        Route::get('/login', [AuthController::class, 'index']);
        Route::post('/login', [AuthController::class, 'login'])->name('login');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('dashboard', [AuthController::class, 'dashboard']);
        Route::get('/logout', [AuthController::class, 'signOut'])->name('logout');
    });
});



