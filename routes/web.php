<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitadoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/invitado/{codigo?}', [WelcomeController::class, 'index'])->name('welcome.invitado');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas Invitados
Route::get('/invitados', [InvitadoController::class, 'index'])->name('invitados');
Route::post('/invitados/store', [InvitadoController::class, 'store'])->name('invitados.store');
Route::put('/invitados/edit', [InvitadoController::class, 'edit'])->name('invitados.edit');
Route::delete('/invitados/destroy', [InvitadoController::class, 'destroy'])->name('invitados.destroy');

Route::get('/clear-cache', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return "Cache is cleared";
});
