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

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/carinfo/{id}','CarController@show'); 

Route::get('/bookcar',function() {
   return view('bookcar');
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
