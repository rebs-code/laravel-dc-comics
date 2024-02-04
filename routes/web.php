<?php

use App\Http\Controllers\Admin\ComicController;
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

// Route::get('/', [ComicController::class, 'index'])->name('comics');


//we use the resource method to generate all the routes for the CRUD operations, otherwise we would have to write them all manually (one route for each operation)
Route::resource('comics', ComicController::class);
