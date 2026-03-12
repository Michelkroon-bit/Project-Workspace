<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order_handeling;
use App\Http\Controllers\ModelController;

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/product-view', function () {
//     return view('Product_view');
// })->middleware(['auth', 'verified'])->name('product_view');

Route::get('/Order-page', function () {
    return view('Order_page');
})->middleware(['auth', 'verified'])->name('order-page');


Route::get('/Order_submitted_screen', function () {
    return view('Order_page');
})->middleware(['auth', 'verified'])->name('order_submitted_screen');   


Route::post('/order-handeling', [Order_handeling::class, 'order'])->name('order-handeling');

require __DIR__.'/auth.php';


Route::get('/product-view', function () {
    return view('Product_view');
})->name('product.view');

Route::get('/custom_upload', [ModelController::class, 'custom_upload'])->name('model.custom_upload');



// ->middleware(['auth', 'verified'])->name('product_view');
