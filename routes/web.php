<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoUserController;
use App\Http\Controllers\CustomerController;

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

Route::post('/signup', [DemoUserController::class, 'signUp'])->name('save');
Route::post('/signin', [DemoUserController::class, 'signInLogic'])->name('login');
Route::post('/customers', [CustomerController::class, 'store'])->name('store');
Route::get('/logout', [DemoUserController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['checkAuth']], function () {
    Route::get('/', [DemoUserController::class, 'index'])->name('signup');
    Route::get('/signin', [DemoUserController::class, 'signInForm'])->name('signin');
    Route::get('/profile', [DemoUserController::class, 'getProfile'])->name('profile');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/addcustomer', [CustomerController::class, 'customerForm'])->name('customer.form');
});



Route::get('/newform', function(){
    return view('newform');
});

