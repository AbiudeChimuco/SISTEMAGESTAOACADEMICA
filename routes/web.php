<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\TurmaController;

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


Route::controller(EscolaController::class)->group(function () {

    Route::get('/escola', 'index');
    route::get('/escolas/create', 'create');

    Route::post('/salvar', 'salvar');

     Route::get('/escolas/editar/{idschool}', 'editar');

    Route::post('/actualizar/{idschool}', 'actualizar');

    Route::delete('/escola/apagar/{idschool}', 'apagar');

});
Route::controller(TurmaController::class)->group(function () {

    Route::get('/turma', 'index');
    route::get('/turmas/create', 'create');

    Route::post('/salvar', 'salvar');

     Route::get('/turmas/editar/{id}', 'editar');

    Route::post('/actualizar/{id}', 'actualizar');

    Route::delete('/turmas/apagar/{id}', 'apagar');

});