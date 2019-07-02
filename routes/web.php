<?php

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

Route::get('/', 'HomeController@welcome');

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/periodo', 'PeriodoController');
    Route::resource('/departamentos', 'DepartamentoController');
    Route::resource('/profiles', 'ProfileController');
    Route::resource('/infraestructura', 'InfraestructuraController');
    Route::get('/infraestructura/{id}/status/check', 'InfraestructuraController@status')->name('infraestructura.status');
    Route::resource('/correctivo', 'CorrectivoController');
    Route::get('/correctivo/{id}/status/check', 'CorrectivoController@status')->name('correctivo.status');
    Route::resource('/mantenimientos', 'MantenimientoController');
    Route::resource('/preventivo', 'PreventivoController');
    Route::resource('/plain', 'PlainController');
    Route::get('/{id}/area/new', 'AreaController@create')->name('area.create');
    Route::post('/area/{id}', 'AreaController@store')->name('area.store');
    Route::get('/area/{id}/show', 'AreaController@show')->name('area.show');

    Route::get('/plan/{id}/preventivo', 'PlainController@index')->name('plan.index');
    Route::post('/plan/{id}/store', 'PlainController@store')->name('plan.store');

    // PDFs
    Route::get('/pdf/infraestructura/{id}', 'PdfController@infraestructura')->name('pdf.infraestructura');
    Route::get('/pdf/correctivo/{id}', 'PdfController@correctivo')->name('pdf.correctivo');
    Route::get('/pdf/preventivo/{id}', 'PdfController@preventivo')->name('pdf.preventivo');
    Route::get('/pdf/orden/{id}', 'PdfController@orden')->name('pdf.orden');

    // Orden de trabajo
    Route::get('/orden/{correctivo}', 'OrdenController@create')->name('orden.create');
    Route::get('/orden/edit/{id}/{correctivo}', 'OrdenController@edit')->name('orden.edit');
    Route::post('/orden/{correctivo}/store', 'OrdenController@store')->name('orden.store');
    Route::put('/orden/{id}/{correctivo}/store', 'OrdenController@update')->name('orden.update');
});


