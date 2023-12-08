<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\RetiroController;


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

Route::get('/afiliado/{empleado}/',[AfiliadoController::class,'index']);

Route::get('/deposito/{empleado}/{idafi}/{nombre}',[DepositoController::class,'index']);

Route::get('/retiro/{empleado}/{idafi}/{nombre}',[RetiroController::class,'index']);

Route::get('/retiro/create/{empleado}/{idafi}/{nombre}',[RetiroController::class,'create']);

Route::get('/deposito/create/{empleado}/{idafi}/{nombre}',[DepositoController::class,'create']);

Route::resource('/empleado','App\Http\Controllers\EmpleadoController');
Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');
Route::resource('/deposito','App\Http\Controllers\DepositoController');
Route::resource('/retiro','App\Http\Controllers\RetiroController');

Route::get('/afiliado/create/{empleado}',[AfiliadoController::class,'create']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
