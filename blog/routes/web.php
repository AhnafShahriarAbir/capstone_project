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

Route::get('/', function () {
    return view('home');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cars', function () {
    return view('cars');
});

Route::group(['prefix' => 'user'], function() {
  Route::group(['middleware' => 'guest'], function() {

    Route::get('/signup', [
      'uses' => 'UserController@getSignup',
      'as' => 'auth.register',
      'middleware' => 'guest'
    ]);

    Route::post('/signup', [
      'uses' => 'UserController@postSignup',
      'as' => 'auth.register',
      'middleware' => 'guest'
    ]);

    Route::get('/signin', [
      'uses' => 'UserController@getSignin',
      'as' => 'auth.login',
      'middleware' => 'guest'
    ]);
    Route::post('/signin', [
      'uses' => 'UserController@postSignin',
      'as' => 'auth.login',
      'middleware' => 'guest'
    ]);

  });

  Route::group(['middleware' => 'auth'], function() {

    Route::get('/logout', [
      'uses' => 'UserController@getLogout',
      'as' => 'user.logout'
    ]);

    Route::get('/profile', [
      'uses' => 'UserController@getProfile',
      'as' => 'user.profile'
    ]);

  });

});



Auth::routes();
//Route::post('/store','Auth\RegisterController@create');

// Route::get('/login', function () {
//     return view('auth.login');
// });


// // route to process the form
// Route::post('login', array(
//   'uses' => 'MainController@doLogin'
// ));
// Route::get('logout', array(
//   'uses' => 'MainController@doLogout'
// ));

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
