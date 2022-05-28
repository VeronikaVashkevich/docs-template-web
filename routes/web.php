<?php

use App\Http\Controllers\DocsController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/templates/{template}', [IndexController::class, 'templates'])->name('templates');

Route::get('/create/form-1', [DocsController::class, 'createForm1'])->name('createForm1');
Route::post('/save-form-1', [DocsController::class, 'addForm1'])->name('addForm1');
