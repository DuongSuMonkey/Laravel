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

Route::prefix('stories')->group (function(){
    Route::get('/',[StoriesController::class,'index'
    ]);
    Route::get('/create',[StoriesController::class,'Create'
    ]);
    Route::post('/create', [StoriesController::class, 'store']);
    Route::get('/update/{id}', [StoriesController::class, 'edit']);
    Route::post('/update/{id}',[StoriesController::class,'update']);
    Route::get('/delete/{id}', [StoriesController::class, 'delete']);
    Route::get('/show/{id}', [StoriesController::class, 'show']);
    });
