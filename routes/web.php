<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth/login');
});



Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'home'])->middleware(['auth', 'verified'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('nouveau-filiere', [HomeController::class, 'create']);
Route::get('nouveau-enregistrement', [HomeController::class, 'etudiant']);
Route::post('ajouter-cycle', [HomeController::class, 'store']);
Route::post('ajouter-niveau', [HomeController::class, 'niveau']);
Route::post('ajouter-filiere', [HomeController::class, 'filiere']);
Route::post('ajouter-nationalite', [HomeController::class, 'nationalite']);
Route::post('ajouter-anneeuniversitaire', [HomeController::class, 'anneeuniversitaire']);
Route::post('ajouter-etudiant', [HomeController::class, 'ajoutetudiant']);
Route::get('carte', [HomeController::class, 'carte']);
Route::get('vue/{id}', [HomeController::class, 'vuecard']);
Route::get('etudiant', [HomeController::class, 'liste']);
Route::delete('/effacer/{id}/destroy', [HomeController::class, 'delete'])->name('effacer');
Route::get('/modifier/{id}/edit', [HomeController::class, 'edit'])->name('edit');
Route::get('secretaire', [HomeController::class, 'comptesecretaire'])->name('secretaire');