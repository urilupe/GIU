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

Route::get('/Casa_Centro', function(){
    return view('Casa_Centro');
})->name('Casa_Centro');

Route::get('/Casa_Moderna', function(){
    return view('Casa_Moderna');
})->name('Casa_Moderna');

Route::get('/Departamento', function(){
    return view('Departamento');
})->name('Departamento');

Route::get('/Casa_Playa', function(){
    return view('Casa_Playa');
})->name('Casa_Playa');

Route::get('/Casa_Residencial', function(){
    return view('Casa_Residencial');
})->name('Casa_Residencial');

Route::get('/Casa_Jardin', function(){
    return view('Casa_Jardin');
})->name('Casa_Jardin');

Route::get('/Preguntas_Frecuentes', function(){
    return view('Preguntas_Frecuentes');
})->name('Preguntas_Frecuentes');