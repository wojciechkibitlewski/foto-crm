<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;


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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    // Route::get('/', function () {
    //     return view('home');
    // })->name('home');
    
    Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->name('home');

    
    Route::middleware('auth')->group(function () {
        
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/settings', function() { 
            return view('settings.home');
        })->name('settings');
        
        Route::get('/products', [ProductsController::class, 'index'])->name('products');

        Route::controller(ProductsController::class)->group(function () {
            Route::get('/products/edit/{id}', 'edit'); 
            Route::post('/products/edit/{id}', 'update');

            Route::get('/products/delete/{id}', 'delete');
            Route::get('/products/create', 'create');
            Route::post('/products/create', 'store'); 

        });
        


        
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';

});



