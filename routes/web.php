<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitadoController;
use App\Http\Controllers\SMSController;
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
Route::post('/invitado/validar_codigo', [WelcomeController::class, 'validar_codigo'])->name('welcome.validar_codigo');
Route::get('/boletos/{codigo}', [WelcomeController::class, 'boletos'])->name('welcome.boletos');
Route::get('/asistencia/{codigo}', [WelcomeController::class, 'asistencia'])->name('welcome.asistencia');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas Invitados
Route::get('/personas', [InvitadoController::class, 'index'])->name('invitados');
Route::post('/personas/store', [InvitadoController::class, 'store'])->name('invitados.store');
Route::put('/personas/edit', [InvitadoController::class, 'edit'])->name('invitados.edit');
Route::delete('/personas/destroy', [InvitadoController::class, 'destroy'])->name('invitados.destroy');
Route::get('/personas/info/{id}', [InvitadoController::class, 'get_info'])->name('invitados.get_info');

Route::put('/personas/confirmar_asistencia', [WelcomeController::class, 'confirmar_asistencia'])->name('invitados.confirmar_asistencia');

// Rutas SMS
Route::get('/sms/test', [SMSController::class, 'test'])->name('sms.test');

Route::get('/clear-cache', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return "Cache is cleared";
});
