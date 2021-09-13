<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\VaccinationController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'Countries'], function(){
    Route::get('', [CountryController::class, 'index'])->name('country.index');
    Route::get('create', [CountryController::class, 'create'])->name('country.create');
    Route::post('store', [CountryController::class, 'store'])->name('country.store');
    Route::get('edit/{schoolClass}', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('update/{schoolClass}', [CountryController::class, 'update'])->name('country.update');
    Route::post('delete/{schoolClass}', [CountryController::class, 'destroy'])->name('country.destroy');
    Route::get('show/{schoolClass}', [CountryController::class, 'show'])->name('country.show');
    Route::post('add/{schoolClass}', [CountryController::class, 'add'])->name('country.add');
 });
 

 Route::group(['prefix' => 'Students'], function(){
    Route::get('', [Vaccination::class, 'index'])->name('vaccination.index');
    Route::get('create', [Vaccination::class, 'create'])->name('vaccination.create');
    Route::post('store', [Vaccination::class, 'store'])->name('vaccination.store');
    Route::get('edit/{student}', [Vaccination::class, 'edit'])->name('vaccination.edit');
    Route::post('update/{student}', [Vaccination::class, 'update'])->name('vaccination.update');
    Route::post('delete/{student}', [Vaccination::class, 'destroy'])->name('vaccination.destroy');
    Route::get('show/{student}', [Vaccination::class, 'show'])->name('vaccination.show');
    Route::post('add/{student}', [Vaccination::class, 'add'])->name('vaccination.add');
 }); 