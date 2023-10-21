<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
});
// Route::get('/course', function () {
//     return view('/course');
// });
Route::get('/basic-autocad', function () {
    return view('/course-details/autocad/basic-autocad');
});
Route::get('/advance-autocad', function () {
    return view('/course-details/autocad/advance-autocad');
});
Route::get('/basic-autocad-3d', function () {
    return view('/course-details/autocad/basic-autocad-3d');
});
Route::get('/basic-sketchup-3d', function () {
    return view('/course-details/autocad/basic-sketchup-3d');
});

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/registration');
});
