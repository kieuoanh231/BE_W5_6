<?php

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

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrainerController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/companies', [CompanyController::class, 'companies']);
Route::get('/trainers', [TrainerController::class, 'trainers']);
Route::get('/search', [SearchController::class,'searchTrainers']);