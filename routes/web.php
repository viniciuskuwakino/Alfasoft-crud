<?php

use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/show/{id}', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/edit/{id}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
    // Route::delete('/contacts/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
