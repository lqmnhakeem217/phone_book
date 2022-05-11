<?php

use App\Http\Controllers\PhoneBookController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [PhoneBookController::class, 'index'])->name('show.phonebook');

Route::post('phonebook/store', [PhoneBookController::class, 'store'])->name('store.phonebook');

Route::get('phonebook/{item}/edit', [PhoneBookController::class, 'edit'])->name('edit.phonebook');

Route::post('phonebook/{item}/update', [PhoneBookController::class, 'update'])->name('update.phonebook');