<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
    Route::post('/create', [StoriesController::class, 'store']);
    Route::put('/update/{id}',[StoriesController::class,'update']);
    Route::delete('/delete/{id}',  [StoriesController::class,'delete']);
    Route::get('/show/{id}', [StoriesController::class, 'show']);
});
//pages
Route::prefix('page')->group (function(){
    Route::get('/', [PagesController::class, 'list']);
    Route::get('/show/{id}', [PagesController::class, 'details']);
    Route::post('create', [PagesController::class, 'store']);
    Route::delete('/delete/{id}',  [PagesController::class,'delete']);
    Route::put('update/{id}',[PagesController::class,'update']);
});
//audio
Route::prefix('audio')->group (function(){
    Route::get('/', [AudioController::class, 'list']);
    Route::get('/show/{id}', [AudioController::class, 'details']);
    Route::post('create', [AudioController::class, 'store']);
    Route::delete('/delete/{id}',  [AudioController::class,'delete']);
    Route::put('update/{id}',[AudioController::class,'update']);
});
//text
Route::prefix('text')->group (function(){
    Route::get('/', [Textcontroller::class, 'list']);
    Route::get('/show/{id}', [Textcontroller::class, 'details']);
});
//login
// Route::post('/protected-route',  [middlewarecontroller::class,'check'] )
//      ->middleware('checklogin');