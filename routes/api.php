<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\middlewarecontroller;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\Textcontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//stories
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
//pages
Route::prefix('page')->group (function(){
    Route::get('/', [PagesController::class, 'list']);
    Route::get('/show/{id}', [PagesController::class, 'details']);
    Route::get('/create', [PagesController::class, 'create']);
    Route::post('create', [PagesController::class, 'store']);
    Route::get('/delete/{id}',  [PagesController::class,'delete']);
    Route::get('/update/{id}', [PagesController::class, 'edit']);
    Route::post('update/{id}',[PagesController::class,'update']);
});
//audio
Route::prefix('audio')->group (function(){
    Route::get('/', [AudioController::class, 'list']);
    Route::get('/show/{id}', [AudioController::class, 'details']);
    Route::get('/create', [AudioController::class, 'create']);
    Route::post('create', [AudioController::class, 'store']);
    Route::get('/delete/{id}',  [AudioController::class,'delete']);
    Route::get('/update/{id}', [AudioController::class, 'edit']);
    Route::post('update/{id}',[AudioController::class,'update']);
    });
    Route::prefix('text')->group (function(){
    Route::get('/', [Textcontroller::class, 'list']);
    Route::get('/show/{id}', [Textcontroller::class, 'details']);
});
//text
Route::prefix('text')->group (function(){
    Route::get('/', [Textcontroller::class, 'list']);
    Route::get('/show/{id}', [Textcontroller::class, 'details']);
});
//login
Route::get('/login', [middlewarecontroller::class, 'show'])->name('login');
Route::post('/protected-route',  [middlewarecontroller::class,'check'] )
      ->middleware('checklogin'); 
Route::get('/protected-route',  [middlewarecontroller::class,'check'] )  ->middleware('checklogin');