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

Route::get('/Terreno_Venta', function(){
    return view('Terreno_Venta');
})->name('Terreno_Venta');

Route::get('/Local_Venta', function(){
    return view('Local_Venta');
})->name('Local_Venta');

Route::get('/Bodega_Venta', function(){
    return view('Bodega_Venta');
})->name('Bodega_Venta');

Route::get('/Departamento_Renta', function(){
    return view('Departamento_Renta');
})->name('Departamento_Renta');

Route::get('/Local_Renta', function(){
    return view('Local_Renta');
})->name('Local_Renta');

Route::get('/Terreno_Renta', function(){
    return view('Terreno_Renta');
})->name('Terreno_Renta');

Route::get('/Bodega_Renta', function(){
    return view('Bodega_Renta');
})->name('Bodega_Renta');

Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return 'Cache cleared';
});
