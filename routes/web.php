<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
//...
Route::post(
 '/dogs',
 [DogController::class, 'create']
)->name('dog.create');
Route::get('/dogs', function () {
 return view('dogs');
})->name('dogs');
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

Route::get('/', function () {
    return view('tareas');
});

Route::get('/addtareas', function () {
    return view('addtareas');
   })->middleware(['auth', 'verified'])->name('addtareas');

Route::post(
    '/addtareas',
    [TareaController::class, 'create']
   )->middleware(['auth', 'verified'])->name('tarea.create');

Route::get('/tareas', [TareaController::class, 'index'])->name('tareas');

Route::delete(
    '/tareas/{id}',
    [TareaController::class, 'delete'])->middleware(['auth', 'verified'])->name('tareas.delete');
      
   
   Route::get('/privado', function () {
    return view('privado');
})->middleware(['auth', 'verified'])->name('privado');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
