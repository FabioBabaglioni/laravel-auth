<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class, 'home'])
    ->name('project.home');

 Route::get('/portfolio', [MainController::class, 'portfolio'])
    ->name('project.portfolio');

Route::get('/modifica', [MainController::class, 'homeLogin'])->middleware(['auth', 'verified']) 
-> name('project.homeLogin');

Route::get('/project/show/{project}', [MainController::class, 'projectShow'])
-> name ('project.show');

Route::get('/project/create', [MainController::class, 'projectCreate'])->middleware(['auth', 'verified']) 
-> name('project.create');

Route::post('/project/store', [MainController::class, 'projectStore'])->middleware(['auth', 'verified']) 
-> name('project.store');

Route::get('/project/delete/{project}', [MainController::class, 'projectDelete'])->middleware(['auth', 'verified']) 
-> name('project.delete');

Route::get('/project/edit/{project}', [MainController::class, 'projectEdit'])->middleware(['auth', 'verified']) 
-> name('project.edit');

Route::post('/project/update', [MainController::class, 'projectUpdate'])->middleware(['auth', 'verified']) 
-> name('project.update');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
