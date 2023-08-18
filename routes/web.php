<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SalesSourceController;


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
            return view('settings.home.home');
        })->name('settings');




        Route::get('settings/productcategory/index', [ProductCategoryController::class, 'index'])->name('settings.productcategory.index');
        Route::get('settings/productcategory/create', [ProductCategoryController::class, 'create'])->name('settings.productcategory.create');
        Route::post('settings/productcategory/store', [ProductCategoryController::class, 'store'])->name('settings.productcategory.store');
        Route::get('settings/productcategory/show', [ProductCategoryController::class, 'show'])->name('settings.productcategory.show');
        Route::get('settings/productcategory/edit/{id}', [ProductCategoryController::class, 'edit'])->name('settings.productcategory.edit');
        Route::patch('settings/productcategory/update', [ProductCategoryController::class, 'update'])->name('settings.productcategory.update');
        Route::delete('settings/productcategory/destroy', [ProductCategoryController::class, 'destroy'])->name('settings.productcategory.destroy');
        
        Route::get('settings/salessource/index', [SalesSourceController::class, 'index'])->name('settings.salessource.index');
        Route::get('settings/salessource/create', [SalesSourceController::class, 'create'])->name('settings.salessource.create');
        Route::post('settings/salessource/store', [SalesSourceController::class, 'store'])->name('settings.salessource.store');
        Route::get('settings/salessource/show', [SalesSourceController::class, 'show'])->name('settings.salessource.show');
        Route::get('settings/salessource/edit/{id}', [SalesSourceController::class, 'edit'])->name('settings.salessource.edit');
        Route::patch('settings/salessource/update', [SalesSourceController::class, 'update'])->name('settings.salessource.update');
        Route::delete('settings/salessource/destroy', [SalesSourceController::class, 'destroy'])->name('settings.salessource.destroy');


        Route::get('products/index', [ProductsController::class, 'index'])->name('products.index');
        Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
        Route::post('products/store', [ProductsController::class, 'store'])->name('products.store');
        Route::get('products/show/{id}', [ProductsController::class, 'show'])->name('products.show');
        Route::get('products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
        Route::patch('products/update', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('products/destroy', [ProductsController::class, 'destroy'])->name('products.destroy');
        
        
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';

});



