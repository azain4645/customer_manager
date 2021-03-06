<?php
use App\Models\Customer;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'customer', 'middleware' => 'auth'], function(){
  Route::get('index','CustomerController@index')->name('customer.index');
  Route::get('create','CustomerController@create')->name('customer.create');
  Route::post('store','CustomerController@store')->name('customer.store');
  Route::get('show/{id}','CustomerController@show')->name('customer.show');
  Route::get('edit/{id}','CustomerController@edit')->name('customer.edit');
  Route::post('update/{id}','CustomerController@update')->name('customer.update');
  Route::post('destroy/{id}','CustomerController@destroy')->name('customer.destroy');
});

Route::get('/home', 'HomeController@index')->name('home');
