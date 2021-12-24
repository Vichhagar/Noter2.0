<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NotesController;

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

Route::get('/', [NotesController::class, 'home']);

//USERs Part
Route::get('registration', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('registration', [RegistrationController::class, 'store'])->middleware('guest');

Route::get('login', [LogoutController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [LogoutController::class, 'loguser'])->middleware('guest');

Route::post('logout', [LogoutController::class, 'destroy'])->middleware('auth');

//Notes Part
//display notes on the dashboard
Route::get('/dashboard', [NotesController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

//create the note
Route::get('/dashboard/create', [NotesController::class, 'create'])->middleware('auth');
Route::post('note', [NotesController::class, 'store'])->middleware('auth');

//Udate the note
Route::get('dashboard/notes/{note}/edit', [NotesController::class, 'edit'])->middleware('auth');
Route::put('/{note}', [NotesController::class, 'update'])->middleware('auth');

//Delete the note
Route::get('dashboard/notes/{note}/delete', [NotesController::class, 'delete'])->middleware('auth');

//View each note
//public note (non login users)
Route::get('/home/{note}', [NotesController::class, 'public_note'])->name('public_note');

//view from dashboard
Route::get('dashboard/{detail}', [NotesController::class, 'detail'])->middleware('auth')->middleware('auth');




