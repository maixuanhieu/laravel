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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/greeting', function () {

//     echo 'Hello World!';

// });

// Route::get('/greeting/{name?}', function ($name = null) {

//     if ($name) {

//         echo 'Hello ' . $name . '!';

//     } else {

//         echo 'Hello World!';

//     }

// });

// Route::get('/login', function() {
//     echo 'Hello Word';
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::post('/login', function (Illuminate\Http\Request $request) {
//     // todo
// });

// Route::post('/login', function (Illuminate\Http\Request $request) {
//     if ($request->username == 'admin'
//         && $request->password == 'admin') {
//         return view('welcome_admin');
//     }

//     return view('login_error');
// });

Route::get('/', function () {
    echo "<h2>This is Home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});

Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});

Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});

Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});

Route::get('/', 'HomeController@index');