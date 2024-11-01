<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanningController;

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

Route::get('/', [PlanningController::class, 'index'])->name('planning.index');
Route::get('/planning/edit', [PlanningController::class, 'edit'])->name('planning.edit');
Route::post('/planning/update', [PlanningController::class, 'update'])->name('planning.update');
