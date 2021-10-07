<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [userController::class, 'login']);

// product controller page
Route::get('/', [productController::class, 'index']);
Route::get('details/{id}', [productController::class, 'detail']);
Route::get('search', [productController::class, 'search']);
Route::post('add_to_cart', [productController::class, 'add_to_cart']);
Route::get('/cartlist', [productController::class, 'cartlist']);
Route::get('/remove_cartItem/{id}', [productController::class, 'remove_cartItem']);

// ordernow page
Route::get('/ordernow', [productController::class, 'ordernow']);

// buynow page
Route::post('/buynow', [productController::class, 'buynow']);

// single_buynow page
Route::post('/single_buynow', [productController::class, 'single_buynow']);

// single_order page
Route::post('/single_order', [productController::class, 'single_order']);

// single_order_cancel page
Route::get('/single_order_cancel', [productController::class, 'single_order_cancel']);

// myorder page
Route::get('/myorder', [productController::class, 'myorder']);

// registration page
Route::post('/registration', [userController::class, 'registration']);

Route::view('registration', 'registration');


// logout
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
