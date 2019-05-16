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
use App\BookCar;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('home');
});


Route::get('/map','CarController@index'); 


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cars', function () {
    return view('cars');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/carinfo/{id}','CarController@show'); 

Route::get('/bookcar','BookCarController@index');

Route::get('/checkout', [
  'uses' => 'BookCarController@getCheckout',
  'as' => 'checkout',
  'middleware' => 'auth'
]);

Route::post('/checkout', [
  'uses' => 'BookCarController@postCheckout',
  'as' => 'checkout',
  'middleware' => 'auth'
]);

Auth::routes();

Route::get('/', [
  'uses' => 'CarController@Index',
  'as' => 'car.index'
]);

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'CarController@index');
Route::get('/home', 'CarController@index');