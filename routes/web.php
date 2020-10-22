<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dashboard/distrito', 'dashboard\DistritoController');
Route::resource('dashboard/user', 'dashboard\UserController');
Route::resource('dashboard/formulario', 'dashboard\FormularioController');
Route::get('/dashboard/reporte', 'dashboard\ReporteController@index')->name('reporte');
Route::get('/dashboard/reporte/{formulario}/show', 'dashboard\ReporteController@show')->name('showreport');

Route::get('/dashboard/indexUsers', 'dashboard\FormularioUserController@index')->name('IndexUsers');
Route::get('/dashboard/download', 'dashboard\ReporteController@reporteExcel')->name('reporteExcel');
Route::get('/dashboard/download/customized', 'dashboard\ReporteController@exportPersonalizado')->name('exportPersonalizado');
Route::get('/dashboard/download/{excel}', 'dashboard\ReporteController@reporteExcelpersonalizado')->name('reporteExcelpersonalizado');
Route::get('/dashboard/imports', 'dashboard\ReporteController@importarShow')->name('importarShow');
Route::get('/dashboard/imports/excel', 'dashboard\ReporteController@importarExcel')->name('importarExcel');







