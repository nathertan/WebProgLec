<?php

use App\Http\Controllers\AboutCont;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\about;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutCont::class, 'index']);

Route::get('/blog', [BlogController::class, 'blog']);

Route::get('/single/{slug}', [BlogController::class, 'found']);

