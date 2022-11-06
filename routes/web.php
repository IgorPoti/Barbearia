<?php

use App\Http\Controllers\loginUser;
use App\Http\Controllers\registerUser;
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
    return view('welcome');
});

Route::get('/login', [loginUser::class, 'index']);

Route::get('/cadastro', [registerUser::class, 'index']);
Route::middleware(["userLogged"])->group(function(){
    Route::get('/servicos', function () {
        return view('servicos');
    });
    Route::get('/agendamento', function () {
        return view('agendamento');
    });
    Route::get('/reset', function () {
        return view('auth.resetPassword');
    });
    Route::get('/logout', [loginUser::class, 'logout']);
});

Route::post('/registrando', [registerUser::class, 'store']);
Route::post('/auth', [loginUser::class, 'auth']);





