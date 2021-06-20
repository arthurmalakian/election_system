<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
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

Route::get('/',[VoteController::class,'index'])->name('main');

Route::resource('votes', VoteController::class)->except(['create','edit','update','destroy']);
Route::resource('candidates', CandidateController::class)->except(['create','edit','update']);
