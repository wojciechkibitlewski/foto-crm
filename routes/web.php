<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SalesSourceController;
use App\Http\Controllers\SalesTypeController;
use App\Http\Controllers\LeadController;

use App\Http\Controllers\ClientController;


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
        Route::get('settings/productcategory/show/{id}', [ProductCategoryController::class, 'show'])->name('settings.productcategory.show');
        Route::get('settings/productcategory/edit/{id}', [ProductCategoryController::class, 'edit'])->name('settings.productcategory.edit');
        Route::patch('settings/productcategory/update', [ProductCategoryController::class, 'update'])->name('settings.productcategory.update');
        Route::delete('settings/productcategory/destroy', [ProductCategoryController::class, 'destroy'])->name('settings.productcategory.destroy');
        
        Route::get('settings/salessource/index', [SalesSourceController::class, 'index'])->name('settings.salessource.index');
        Route::get('settings/salessource/create', [SalesSourceController::class, 'create'])->name('settings.salessource.create');
        Route::post('settings/salessource/store', [SalesSourceController::class, 'store'])->name('settings.salessource.store');
        Route::get('settings/salessource/show/{id}', [SalesSourceController::class, 'show'])->name('settings.salessource.show');
        Route::get('settings/salessource/edit/{id}', [SalesSourceController::class, 'edit'])->name('settings.salessource.edit');
        Route::patch('settings/salessource/update', [SalesSourceController::class, 'update'])->name('settings.salessource.update');
        Route::delete('settings/salessource/destroy', [SalesSourceController::class, 'destroy'])->name('settings.salessource.destroy');

        Route::get('settings/salestype/index', [SalesTypeController::class, 'index'])->name('settings.salestype.index');
        Route::get('settings/salestype/create', [SalesTypeController::class, 'create'])->name('settings.salestype.create');
        Route::post('settings/salestype/store', [SalesTypeController::class, 'store'])->name('settings.salestype.store');
        Route::get('settings/salestype/show/{id}', [SalesTypeController::class, 'show'])->name('settings.salestype.show');
        Route::get('settings/salestype/edit/{id}', [SalesTypeController::class, 'edit'])->name('settings.salestype.edit');
        Route::patch('settings/salestype/update', [SalesTypeController::class, 'update'])->name('settings.salestype.update');
        Route::delete('settings/salestype/destroy', [SalesTypeController::class, 'destroy'])->name('settings.salestype.destroy');


        Route::get('products/index', [ProductsController::class, 'index'])->name('products.index');
        Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
        Route::post('products/store', [ProductsController::class, 'store'])->name('products.store');
        Route::get('products/show/{id}', [ProductsController::class, 'show'])->name('products.show');
        Route::get('products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
        Route::patch('products/update', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('products/destroy', [ProductsController::class, 'destroy'])->name('products.destroy');
        
        Route::get('clients/index', [ClientController::class, 'index'])->name('clients.index');
        Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
        Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');
        Route::get('clients/show/{id}', [ClientController::class, 'show'])->name('clients.show');
        Route::get('clients/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
        Route::patch('clients/update', [ClientController::class, 'update'])->name('clients.update');
        Route::delete('clients/destroy', [ClientController::class, 'destroy'])->name('clients.destroy');
       
        Route::get('leads/index', [LeadController::class, 'index'])->name('leads.index');
        Route::get('leads/create', [LeadController::class, 'create'])->name('leads.create');
        Route::post('leads/store', [LeadController::class, 'store'])->name('leads.store');
        Route::get('leads/show/{id}', [LeadController::class, 'show'])->name('leads.show');
        Route::get('leads/edit/{id}', [LeadController::class, 'edit'])->name('leads.edit');
        Route::patch('leads/update', [LeadController::class, 'update'])->name('leads.update');
        Route::delete('leads/destroy', [LeadController::class, 'destroy'])->name('leads.destroy');
        
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';

});



