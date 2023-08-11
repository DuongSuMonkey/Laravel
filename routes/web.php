<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Textcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\middlewarecontroller;
use Illuminate\Http\Request;
use App\Models\stoires;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AudioController;
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
Route::get('/',function(){
    return view('welcome');
});
Route::get('/login', [middlewarecontroller::class, 'show'])->name('login');
Route::get('/update/{id}', [PagesController::class, 'update']);