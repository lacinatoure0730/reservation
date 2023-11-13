<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Student\StudentController;
use App\Livewire\ListChambre;
use App\Livewire\ListEtudiant;
use App\Livewire\ListUser;
use Illuminate\Auth\Events\Logout;
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
Route::get('users', ListUser::class)->name('users');
Route::get('etudiants', ListEtudiant::class)->name('etudiants');
Route::get('chambre', ListChambre::class)->name('chambre');
Route::get('reserver', StudentController::class)->name('__invoke');
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});


Route::get('student', [StudentController::class, 'index'])->name('index');

require __DIR__.'/auth.php';
