<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/contacts/index', [ContactController::class,'index'])->middleware(['auth']);
Route::get('/contacts/create', [ContactController::class,'create'])->middleware(['auth']);
Route::post('/contacts/store',[ContactController::class,'store'])->middleware(['auth']);
require __DIR__.'/auth.php';