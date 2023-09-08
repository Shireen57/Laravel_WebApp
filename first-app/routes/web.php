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

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/tours', function () {
    return view('tours');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/post/{id?}', function (string $id) {
//    if($id)
//    {
//     return "<h1>Post id: " . $id."</h1>";}
//     else{
//         return "not found";
//     }
// })->whereNumber('id');

// Route::view('/post','post');
//named routes
//grouped routes
