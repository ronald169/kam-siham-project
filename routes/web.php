<?php

use App\Http\Controllers\ProfileController;
use App\Models\Consultation;
use App\Models\Medecine;
use App\Models\Patient;
use App\Models\Psychopathology;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Mes routes

Route::get('patients/{patient}', function(Patient $patient) {

    return view('patient', compact('patient'));

})->name('patients.print');


Route::get('psycho/{patient}', function(Psychopathology $patient) {

    return view('psychopathologie', compact('patient'));

})->name('psycho.print');


Route::get('medecine/{patient}', function(Medecine $patient) {

    return view('medecine', compact('patient'));

})->name('medecine.print');

Route::get('consultation/{patient}', function(Consultation $patient) {

    return view('consultation', compact('patient'));

})->name('consultation.print');

require __DIR__.'/auth.php';
