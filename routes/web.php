<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\SalaController;
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
    //return view('welcome');
    return view('index');
   // return redirect(route('paciente.index',1));
});

Route::controller(PacienteController::class)->group(function (){
     Route::get('paciente/create','create')->name('paciente.create');
    Route::post('paciente/store','store')->name('paciente.store');
     Route::get('paciente/{sw}','index')->name('paciente.index');
     Route::get('paciente/buscar/{paciente}','buscar')->name('paciente.buscar');
    Route::post('paciente/update/{paciente}','update')->name('paciente.update');  
    Route::get ('paciente/destroy/{paciente}','destroy')->name('paciente.destroy');  
    Route::get ('paciente/restore/{paciente}','restore')->name('paciente.restore'); 
});

Route::controller(SalaController::class)->group(function (){
    Route::get('sala/create','create')->name('sala.create');
   Route::post('sala/store','store')->name('sala.store');
    Route::get('sala/{sw}','index')->name('sala.index');
    Route::get('sala/buscar/{sala}','buscar')->name('sala.buscar');
   Route::post('sala/update/{sala}','update')->name('sala.update');  
   Route::get ('sala/destroy/{sala}','destroy')->name('sala.destroy');  
   Route::get ('sala/restore/{sala}','restore')->name('sala.restore'); 
});
