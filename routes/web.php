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
    return view('welcome');
})->name('bienvenida');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/flowbite', function(){
    return view('flowbite');
})->name('flowbite');

Route::get('/venta', function(){
    return view('venta');
})->name('venta');

Route::get('/renta', function(){
    return view('renta');
})->name('renta');