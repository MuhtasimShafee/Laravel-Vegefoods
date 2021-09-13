<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\ClientController@home');
Route::get('/shop','App\Http\Controllers\ClientController@shop');
Route::get('/cart','App\Http\Controllers\ClientController@cart');
Route::get('/checkout','App\Http\Controllers\ClientController@checkout');
Route::get('/client_login','App\Http\Controllers\ClientController@login');
Route::get('/signup','App\Http\Controllers\ClientController@signup');
Route::get('/addToCart/{id}','App\Http\Controllers\ClientController@addToCart');
Route::post('/updateqty','App\Http\Controllers\ClientController@updateqty');
Route::get('/removeitem/{id}','App\Http\Controllers\ClientController@removeitem');
Route::post('/postcheckout','App\Http\Controllers\ClientController@postcheckout');
Route::post('/createaccount','App\Http\Controllers\ClientController@createaccount');
Route::post('/accessaccount','App\Http\Controllers\ClientController@accessaccount');
Route::get('/client_logout','App\Http\Controllers\ClientController@logout');
Route::get('/view_by_cat/{name}','App\Http\Controllers\ClientController@view_by_cat');



Route::get('/admin','App\Http\Controllers\AdminController@dashboard');
Route::get('/orders','App\Http\Controllers\AdminController@orders');


Route::get('/addcategory','App\Http\Controllers\CategoryController@addcategory');
Route::get('/categories','App\Http\Controllers\CategoryController@categories');
Route::post('/savecategory','App\Http\Controllers\CategoryController@savecategory');
Route::get('/edit_category/{id}','App\Http\Controllers\CategoryController@edit');
Route::post('/updatecategory','App\Http\Controllers\CategoryController@updatecategory');
Route::get('/delete/{id}','App\Http\Controllers\CategoryController@delete');



Route::get('/addproduct','App\Http\Controllers\ProductController@addproduct');
Route::get('/products','App\Http\Controllers\ProductController@products');
Route::post('/saveproduct','App\Http\Controllers\ProductController@saveproduct');
Route::get('/edit_product/{id}','App\Http\Controllers\ProductController@editproduct');
Route::post('/updateproduct','App\Http\Controllers\ProductController@updateproduct');
Route::get('/delete_product/{id}','App\Http\Controllers\ProductController@delete_product');
Route::get('/activate_product/{id}','App\Http\Controllers\ProductController@activate_product');
Route::get('/unactivate_product/{id}','App\Http\Controllers\ProductController@unactivate_product');




Route::get('/sliders','App\Http\Controllers\SliderController@sliders');
Route::get('/addslider','App\Http\Controllers\SliderController@addslider');
Route::post('/saveslider','App\Http\Controllers\SliderController@saveslider');
Route::get('/edit_slider/{id}','App\Http\Controllers\SliderController@edit_slider');
Route::post('/updateslider','App\Http\Controllers\SliderController@updateslider');
Route::get('/delete_slider/{id}','App\Http\Controllers\SliderController@delete_slider');
Route::get('/unactivate_slider/{id}','App\Http\Controllers\SliderController@unactivate_slider');
Route::get('/activate_slider/{id}','App\Http\Controllers\SliderController@activate_slider');




Route::get('/view_pdf/{id}','App\Http\Controllers\PdfController@view_pdf');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
