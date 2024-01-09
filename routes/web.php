<?php

use App\Livewire\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientConroller;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\TransfertController;
use App\Http\Controllers\TransactionController;

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

Route::get('/annuaire-utilisateurs', UserController::class)->name('annuaire.users');
Route::get('/client', ClientConroller::class)->name('annuaire.clients');
Route::get('/users', User::class);
Route::get('/annuaire-comte', CompteController::class)->name('annuaire.compte');
Route::get('/annuaire-transaction',TransactionController::class)->name('annuaire.transaction');
Route::get('/annuaire-transfert', TransfertController::class)->name('annuaire.transfert');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
