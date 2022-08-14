<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BicicletaController;


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
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
    
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
    
    
Route::get('bicicletas', [BicicletaController::class,'index'])
    ->name('bicicletas.index');
    
Route::post('bicicletas', [BicicletaController::class,'store'])
    ->middleware('auth')
    ->name('bicicletas.store');
    
Route::get('bicicletas/create', [BicicletaController::class,'create'])
    ->middleware('auth')
    ->name('bicicletas.create');
    
Route::delete('bicicletas/{bicicleta}', [BicicletaController::class,'destroy'])
    ->middleware('auth')
    ->name('bicicletas.destroy');
    
Route::get('bicicletas/{bicicleta}', [BicicletaController::class,'show'])
    ->middleware('auth')
    ->name('bicicletas.show');
