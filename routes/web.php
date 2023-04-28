<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('form');
});

Route::get('/dashboard/{orcamento?}', [DashboardController::class, 'showDashboard'])->name('dashboard');

Route::post('/cadastro-orcamento', [UsuarioController::class, 'cadastroOrcamento'])->name('user.cadastro-orcamento');
