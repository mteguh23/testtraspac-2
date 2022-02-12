<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function(){
    return view('home');
});
Route::get('/count', [Controller::class, 'count']);
Route::get('/replace', [Controller::class, 'replace']);
Route::get('/sort', [Controller::class, 'sort']);
Route::post('/count/process', [Controller::class, 'count_process']);
Route::post('/replace/process', [Controller::class, 'replace_process']);
Route::post('/sort/process', [Controller::class, 'sort_process']);