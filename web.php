<?php

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

#home page 
Route::get('/','HomeController@index');
Route::get('/admin','AdminController@index');
//Back-end site
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','SuperAdminController@logout');




//Slider Releted
Route::get('/add-slider','SliderController@index');
Route::get('/all-slider','SliderController@all_slider');
Route::post('/save-slider','SliderController@save_products');
//slider status
Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');
//delete category status
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');





//item add and save releted
Route::get('/add-item','FoodItemController@index');
Route::get('/all-item','FoodItemController@all_item');
Route::post('/save-item','FoodItemController@save_item');
//item status
Route::get('/unactive_item/{item_id}','FoodItemController@unactive_item');
Route::get('/active_item/{item_id}','FoodItemController@active_item');
//delete item status
Route::get('/delete-item/{item_id}','FoodItemController@delete_item');




//reserve table
Route::get('/home','ReserveTableController@index');
// Route::get('/all-slider','ReserveTableController@all_slider');
Route::post('/save-reserve','ReserveTableController@save_reserve');
//all reserve 
Route::get('/all-reserve','ReserveTableController@all_reserve');
//delete reserve 
Route::get('/delete-reserve/{id}','ReserveTableController@delete_reserve');



