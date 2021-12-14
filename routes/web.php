<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ServicioController;
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

Route::resource('roles', RolController::class);
Route::put('roles/{id}', 'RolControllerr@update');

Route::resource('personales', PersonalController::class);
Route::put('personales/{id}', 'PersonalController@update');

Route::resource('servicios', ServicioController::class);
Route::put('servicios/{id}', 'ServicioController@update');

Route::resource('medicos', MedicoController::class);
Route::put('medicos/{id}', 'MedicoController@update');

Route::resource('pacientes', PacienteController::class);
Route::put('pacientes/{id}', 'PacienteController@update');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
