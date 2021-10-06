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


// logout
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
// Route::view('product', 'product');
