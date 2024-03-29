<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

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


Route::get('/', [InfoController::class,'index'])->name('manage');
Route::get('/addstudent', [InfoController::class,'addstudent'])->name('addstudent');
Route::post('/insert', [InfoController::class,'store'])->name('insert');
Route::get('/edit/{id}', [InfoController::class,'edit'])->name('edit');
Route::post('/update/{id}', [InfoController::class,'update'])->name('update');
Route::get('/delete/{id}', [InfoController::class,'destroy'])->name('delete');
