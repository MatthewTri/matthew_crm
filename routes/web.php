<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CustomerController;

use App\Models\Product;


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login', [LoginController::class, 'index']) ->middleware('guest') -> name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']) -> name('logout');

Route::resource('/products', ProductController::class) -> middleware('auth');

Route::resource('/leads',LeadController::class)-> middleware('auth');
Route::resource('/projects',ProjectController::class)-> middleware('is_manager');
Route::resource('/subscriptions',SubscriptionController::class)-> middleware('auth');

Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
