<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\PromocionController;

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Rutas para Cliente
//Route::resource('personas', PersonaController::class);
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// Rutas para Reservacion
//Route::resource('personas', PersonaController::class);
Route::get('/reservacions', [ReservacionController::class, 'index'])->name('reservacions.index');
Route::get('/reservacions/create', [ReservacionController::class, 'create'])->name('reservacions.create');
Route::post('reservacions', [ReservacionController::class, 'store'])->name('reservacions.store');
Route::get('/reservacions/{reservacion}', [ReservacionController::class, 'show'])->name('reservacions.show');
Route::get('/reservacions/{reservacion}/edit', [ReservacionController::class, 'edit'])->name('reservacions.edit');
Route::put('/reservacions/{reservacion}', [ReservacionController::class, 'update'])->name('reservacions.update');
Route::delete('/reservacions/{reservacion}', [ReservacionController::class, 'destroy'])->name('reservacions.destroy');

// Rutas para Promocion
//Route::resource('personas', PersonaController::class);
Route::get('/promocions', [PromocionController::class, 'index'])->name('promocions.index');
Route::get('/promocions/create', [PromocionController::class, 'create'])->name('promocions.create');
Route::post('promocions', [PromocionController::class, 'store'])->name('promocions.store');
Route::get('/promocions/{promocion}', [PromocionController::class, 'show'])->name('promocions.show');
Route::get('/promocions/{promocion}/edit', [PromocionController::class, 'edit'])->name('promocions.edit');
Route::put('/promocions/{promocion}', [PromocionController::class, 'update'])->name('promocions.update');
Route::delete('/promocions/{promocion}', [PromocionController::class, 'destroy'])->name('promocions.destroy');