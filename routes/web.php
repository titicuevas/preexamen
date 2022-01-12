<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ReservasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VuelosController;
use Illuminate\Routing\Router;

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
    return view('home');
});

Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/alumnos',[AlumnosController::class,'index']);
Route::get('/alumnos/index',[AlumnosController::class,'index']);
Route::get('login', [UsuariosController::class, 'loginForm']);
Route::post('login', [UsuariosController::class, 'login']);
Route::post('logout', [UsuariosController::class, 'logout']);


Route::get('vuelos',[VuelosController::class, 'viaje']);

Route::post('vuelos/id',[ReservasController::class,'reservar']);

Route::get('reservas', [ReservasController::class, 'reservas']);
Route::get('reservas/{id}', [ReservasController::class, 'show']);
Route::post('vuelos/{id}', [ReservasController::class, 'reservar']);
