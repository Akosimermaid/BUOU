<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\DeleteController;
/*
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

Route::redirect(uri:'/',destination:'login');

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//This is the Routing for Adding data
Route::get('Add',[AddController::class, 'viewAdd']);
Route::post('create',[AddController::class, 'create']);

//This is the routing for Edit Data
Route::get('Edit',[App\Http\Controllers\EditController::class, 'viewEdit']);
Route::post('change/{id}',[EditController::class, 'change']);

//This is the Routing for Deleting Data
Route::get('Delete',[DeleteController::class, 'viewDelete']);
Route::get('destroy',[DeleteController::class, 'destroy']);
Route::get('find',[DeleteController::class, 'find']);
