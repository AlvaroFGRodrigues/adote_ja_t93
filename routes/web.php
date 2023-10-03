<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\DonoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('funcionario')
->controller(FuncionarioController::class)
->middleware('auth')
->group(function () {
    Route::get('/', 'index')
        ->name('funcionario.index');
    Route::get('/novo', 'create')
        ->name('funcionario.create');
    Route::get('/editar/{id}', 'edit')
        ->name('funcionario.edit');
    Route::get('exibir/{id}', 'show')
        ->name('funcionario.show');

    Route::post('cadastrar', 'store')
        ->name('funcionario.store');
    Route::post('atualizar/{id}', 'update')
        ->name('funcionario.update');
    Route::post('excluir/{id}', 'destroy')
        ->name('funcionario.destroy');
});

Route::prefix('pet')
->controller(PetController::class)
->middleware('auth')
->group(function () {
    Route::get('/', 'index')
        ->name('pet.index');
    Route::get('/novo', 'create')
        ->name('pet.create');
    Route::get('/editar/{id}', 'edit')
        ->name('pet.edit');
    Route::get('exibir/{id}', 'show')
        ->name('pet.show');

    Route::post('cadastrar', 'store')
        ->name('pet.store');
    Route::post('atualizar/{id}', 'update')
        ->name('pet.update');
    Route::post('excluir/{id}', 'destroy')
        ->name('pet.destroy');
});

Route::prefix('dono')
->controller(DonoController::class)
->middleware('auth')
->group(function () {
    Route::get('/', 'index')
        ->name('dono.index');
    Route::get('/novo', 'create')
        ->name('dono.create');
    Route::get('/editar/{id}', 'edit')
        ->name('dono.edit');
    Route::get('exibir/{id}', 'show')
        ->name('dono.show');

    Route::post('cadastrar', 'store')
        ->name('dono.store');
    Route::post('atualizar/{id}', 'update')
        ->name('dono.update');
    Route::post('excluir/{id}', 'destroy')
        ->name('dono.destroy');
});
