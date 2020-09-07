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

Route::get('/smk', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/error', function () {
    return view("EROR");
});
// Route::redirect('/error', '/index');


// Route::resource('/layouts/pages');


// Route::get('/foo', function () {
//     return view('hello akhy');
// });

// Route:redirect('/admin', 'error');

// Route::get('/product/{id}', function () {
//     return 'User'.$id;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         // Matches The "/admin/users" URL
//     });    
// });