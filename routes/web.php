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


Route::group(['prefix' => 'countries'], function(){
    Route::get('', [CountryController::class, 'index'])->name('country.index');
    Route::get('create', [CountryController::class, 'create'])->name('country.create');
    Route::post('store', [CountryController::class, 'store'])->name('country.store');
    Route::get('edit/{country}', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('update/{country}', [CountryController::class, 'update'])->name('country.update');
    Route::post('delete/{country}', [CountryController::class, 'destroy'])->name('country.destroy');
    Route::get('show/{country}', [CountryController::class, 'show'])->name('country.show');
    Route::post('add/{country}', [CountryController::class, 'add'])->name('country.add');
 });
 

 Route::group(['prefix' => 'vaccinations'], function(){
    Route::get('', [VaccinationController::class, 'index'])->name('vaccination.index');
    Route::get('create', [VaccinationController::class, 'create'])->name('vaccination.create');
    Route::post('store', [VaccinationController::class, 'store'])->name('vaccination.store');
    Route::get('edit/{vaccination}', [VaccinationController::class, 'edit'])->name('vaccination.edit');
    Route::post('update/{vaccination}', [VaccinationController::class, 'update'])->name('vaccination.update');
    Route::post('delete/{vaccination}', [VaccinationController::class, 'destroy'])->name('vaccination.destroy');
    Route::get('show/{vaccination}', [VaccinationController::class, 'show'])->name('vaccination.show');
    Route::post('add/{vaccination}', [VaccinationController::class, 'add'])->name('vaccination.add');
 }); 