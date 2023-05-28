<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WindowsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('all-products', [ProductController::class,'show']);
Route::post('STORE',[ProductController::class,'store'] );
Route::post('delete/{id}',[ProductController::class,'distroy'] );
Route::post('update/{id}',[ProductController::class,'goingToTheUpdate'] );
Route::post('up/{id}',[ProductController::class,'update'] );

Route::get('all-orders', [OrderController::class,'show']);
Route::post('STOREOrder',[OrderController::class,'store'] );
Route::post('deleteOrder/{id}',[OrderController::class,'distroy'] );
Route::post('updateOrder/{id}',[OrderController::class,'goingToTheUpdate'] );
Route::post('upOrder/{id}',[OrderController::class,'update'] );

Route::get('all-categories', [CategoryController::class,'show']);
Route::post('STORECategorie',[CategoryController::class,'store'] );
Route::post('deleteCategorie/{id}',[CategoryController::class,'distroy'] );
Route::post('updateCategorie/{id}',[CategoryController::class,'goingToTheUpdate'] );
Route::post('upCategorie/{id}',[CategoryController::class,'update'] );

route::get('/', [WindowsController::class,'root'] );
route::get('create-order', [WindowsController::class,'create_order'] );
route::get('create-product',  [WindowsController::class,'create_product'] );
route::get('create-category', [WindowsController::class,'create_category'] );
route::get('createOrder',  [WindowsController::class,'createOrder']);
route::get('CreateProduct',[WindowsController::class,'CreateProduct']);
route::get('productsApp',[WindowsController::class,'productsApp']);
route::get('OrdersApp',[WindowsController::class,'OrdersApp']);
route::get('categoriesApp',[WindowsController::class,'categoriesApp']);

Auth::routes();
//test
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

