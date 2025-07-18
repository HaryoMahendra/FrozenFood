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
    return view('layouts.main');
});

Route::get('/tentang', function () {
    return view('menu.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('menu.kontak');
})->name('kontak');

Route::get('/listmenu', function () {
    return view('menu.listmenu');
})->name('listmenu');

Route::get('/view', function () {
    return view('profile.view');
})->name('view');


