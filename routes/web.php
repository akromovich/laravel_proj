<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
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

Route::get('/', [\App\Http\Controllers\PostController::class,'index'])->name('home');
// Route::get('/', 'PostController@index');

Route::get('/user/',function(){
    return view('user');
})->name('user');

Route::get('/profile/',function(){
    return view('profile');
})->name('profile');

Route::get('/users/create',[\App\Http\Controllers\CrudController::class,'create']);
Route::get('/users/update',[\App\Http\Controllers\CrudController::class,'update']);
Route::get('/users/delete',[\App\Http\Controllers\CrudController::class,'delete']);
Route::get('/profile/foc/',[\App\Http\Controllers\CombatController::class,'firstorcreate']);
Route::get('profile/uoc/',[\App\Http\Controllers\CombatController::class,'updateorcreate']);