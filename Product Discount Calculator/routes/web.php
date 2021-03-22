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

Route::get('/discount', function () {
    return view('discount');
});

Route::post('/discount', function (\Illuminate\Http\Request $request) {
    $productDescription = $request->input('Product_Description');
    $listPrice = $request->input('Price');
    $discountPercent = $request->input('Discount_Percent');
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice * $discountAmount;

    return view('show', compact('productDescription', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice'));
});