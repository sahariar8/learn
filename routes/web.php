<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post',[PostController::class,'index'])->name('post.home');
Route::get('/add-post',[PostController::class,'edit'])->name('edit.store');
Route::post('/post',[PostController::class,'store'])->name('post.store');
Route::delete('/post-delete/{id}',[PostController::class,'destroy'])->name('post.delete');

