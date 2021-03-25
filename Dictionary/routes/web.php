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

Route::get('/login', function() {
    echo 'Hello Word';
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    // todo
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $dictionary = [
        "Hello" => "Xin chào",
        "How" => "Thế nào",
        "Book" => "Quyển Vở",
        "Computer" => "Máy tính",
    ];

    $searchWord = $request->search;
    $flag = 0;

    foreach ($dictionary as $key => $description) {
        if ($key == $searchWord) {
            echo "From: " . $key . "<br>" . "Meaning of words: " . $description;
            echo "<br>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Did not find the words to look up: ";
    }
    return view('dictionary');
});