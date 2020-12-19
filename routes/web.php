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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::post('ajax/request', [\App\Http\Controllers\AjaxController::class, 'loadTemplate'])->name('ajax.load');
Route::post('ajax/update', [\App\Http\Controllers\AjaxController::class, 'update'])->name('ajax.update');
Route::post('ajax/set', [\App\Http\Controllers\AjaxController::class, 'sort'])->name('ajax.sort');
Route::post('ajax/store', [\App\Http\Controllers\AjaxController::class, 'store'])->name('ajax.store');
Route::delete('ajax/delete', [\App\Http\Controllers\AjaxController::class, 'destroy'])->name('ajax.destroy');
Route::get('ajax/send', [\App\Http\Controllers\AjaxController::class, 'send'])->name('ajax.send');
