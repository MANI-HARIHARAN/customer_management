<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customer',[CustomerController::class, 'index']);
Route::get('/add',[CustomerController::class, 'create']);
Route::post('/post',[CustomerController::class, 'store']);
Route::get('/edit{id}',[CustomerController::class, 'edit']);
Route::put('/update/{id}',[CustomerController::class,'update']);
Route::delete('/delete{id}',[CustomerController::class, 'destroy']);
