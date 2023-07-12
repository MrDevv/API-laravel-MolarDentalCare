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

Route::view('/','home');
Route::get('usuariojson','App\Http\Controllers\UsuarioController@index')->name('usuario');
Route::get('pacientejson','App\Http\Controllers\PacientesController@index')->name('paciente');
Route::get('odontologojson','App\Http\Controllers\OdontologoController@index')->name('odontologo');
Route::get('horariojson','App\Http\Controllers\HorarioAtencionController@index')->name('horario');
Route::get('citajson','App\Http\Controllers\CitaController@index')->name('cita');
Route::post('/paciente',[PacientesController::class,'store']);