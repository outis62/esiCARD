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

// Route::get('/home', [HomeController::class, 'home'])->name('home');
// Route::get('nouveau-cycle','CyclesController@create');
// Route::get('/nouveau-filiere','FilieresController@create');
Route::get('nouveau-filiere', [HomeController::class, 'create']);
Route::post('ajouter-cycle', [HomeController::class, 'store']);
Route::post('ajouter-niveau', [HomeController::class, 'niveau']);
Route::post('ajouter-filiere', [HomeController::class, 'filiere']);
// Route::get('nouveau-nationalite','NationalitesController@create');
// Route::get('nouveau-anneeUniversitaire','AnneeUniversitairesController@create');