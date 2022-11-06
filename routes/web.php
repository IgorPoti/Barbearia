<?php

use App\Http\Controllers\loginUser;
use App\Http\Controllers\registerUser;
use Illuminate\Support\Facades\Route;

Route::get('/login', [loginUser::class, 'index']);
Route::post('/auth', [loginUser::class, 'auth']);

Route::get('/reset', function () {
    return view('auth.resetPassword');
});

Route::get('/cadastro', [registerUser::class, 'index']);
Route::post('/registrando', [registerUser::class, 'store']);

Route::middleware(["userLogged"])->group(function () {
    Route::get('/', function () {
        return view('servicos');
    });

    Route::get('/servicos', function () {
        return view('servicos');
    });

    Route::get('/agendamento', function () {
        return view('agendamento');
    });

    Route::get('/logout', [loginUser::class, 'logout']);
});
