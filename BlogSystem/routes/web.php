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



Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/createCategory', function () {
    return view('admin.category.createCategory');
});

Route::get('/showCategory', function () {
    return view('admin.category.showCategory');
});

Route::get('/editCategory', function () {
    return view('admin.category.editCategory');
});

Route::get('/createPost', function () {
    return view('admin.post.createPost');
});

Route::get('/showPost', function () {
    return view('admin.post.showPost');
});

Route::get('/editPost', function () {
    return view('admin.post.editPost');
});
