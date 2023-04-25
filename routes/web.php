<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AddProductsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/aboutus', [AboutUsController::class, 'aboutus'])->name('aboutus');

Route::get('/our-products', [ProductsController::class, 'products'])->name('products');
Route::get('/addproduct', [AddProductsController::class, 'createpp'])->name('createpp');


Route::get('/contact-us', [ContactController::class, 'formcontact'])->name('formcontact');
Route::post('/contact-us', [ContactController::class, 'formcreate'])->name('formcreate');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
