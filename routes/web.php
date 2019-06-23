<?php

use App\BookCar;
use Illuminate\Support\Facades\Input;



Route::get('/', 'HomeController@index');
Route::get('/home', 'CarController@index')->name('home');
Route::get('/map', 'CarController@index');



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cars', function () {
    return view('cars');
});


Route::get('/car/{id}','CarController@show'); 

Route::get('/bookcar','BookCarController@index');

Route::post('/checkout', [
  'uses' => 'BookCarController@postCheckout',
  'as' => 'checkout',
  'middleware' => 'auth'
]);
Route::get('/checkout', [
  'uses' => 'BookCarController@getCheckout',
  'as' => 'checkout',
  'middleware' => 'auth'
]);

Auth::routes();

Route::get('/signup', [
      'uses' => 'UserController@getSignup',
      'as' => 'user.signup',
      'middleware' => 'guest'
    ]);

Route::post('/signup', [
  'uses' => 'UserController@postSignup',
  'as' => 'user.signup',
  'middleware' => 'guest'
]);

Route::get('/signin', [
  'uses' => 'UserController@getSignin',
  'as' => 'user.signin',
  'middleware' => 'guest'
]);
Route::post('/signin', [
  'uses' => 'UserController@postSignin',
  'as' => 'user.signin',
  'middleware' => 'guest'
]);

 Route::get('/logout', [
      'uses' => 'UserController@getLogout',
      'as' => 'user.logout'
    ]);

Route::get('/profile', [
      'uses' => 'UserController@getProfile',
      'as' => 'user.profile'
    ]);



// Route::get('/', [
//   'uses' => 'CarController@Index',
//   'as' => 'car.index'
// ]);
