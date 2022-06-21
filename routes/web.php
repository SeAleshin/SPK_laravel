<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewTasksController;
use App\Http\Controllers\ClosedTasksController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchClosedController;
use App\Http\Controllers\CommentController;

Route::resource('/', ClientsController::class)->names([
    'index' => 'main',
    'create' => 'create',
    'edit' => 'edit',
]);

Route::resource('/admin', AdminController::class)->only([
    'index',
])->names([
    'index' => 'admin',
]);

Route::resource('/admin/new', NewTasksController::class)->names([
    'index' => 'new.index',
    'show' => 'new.show',
    'update' => 'new.update',
])->parameters([
    'new' => 'client',
]);

Route::resource('/admin/closed', ClosedTasksController::class)->names([
    'index' => 'closed.index',
    'show' => 'closed.show',
])->parameters([
    'closed' => 'client',
]);

Route::post('/admin/new/search', [SearchController::class, 'index'])->name('search');
Route::post('/admin/closed/search', [SearchClosedController::class, 'index'])->name('search.closed');

Route::post('/admin/comment/{client}', [CommentController::class, 'store'])->name('comment');

Route::get('/product', function () {
    return view('product.product_main');
})->name('product');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');

Route::get('/product/PVD', function () {
    return view('product.pvd');
})->name('product.pvd');

Route::get('/product/PND', function () {
    return view('product.pnd');
})->name('product.pnd');

Route::get('/product/PP', function () {
    return view('product.pp');
})->name('product.pp');

Auth::routes();
