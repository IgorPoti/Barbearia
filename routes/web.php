<?php

use App\Http\Controllers\loginUser;
use App\Http\Controllers\registerUser;
use App\Http\Controllers\ServicesController;
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

    Route::get('/servicos', [ServicesController::class, 'index']);
    Route::post('/registrando/servico', [ServicesController::class, 'store']);

    Route::get('/gerenciarservicos', [ServicesController::class, 'indexAdmin']);
    Route::post('/deleteservice/{id}', [ServicesController::class, 'delete']);

    Route::get('/editandoservico/{id}', [ServicesController::class, 'indexEditar']);
    Route::post('/editandoservico/{id}/save', [ServicesController::class, 'edit']);

    Route::get('/agendamento', function () {
        return view('agendamento');
    });

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });


    Route::get('/criarservico', [ServicesController::class, 'indexCriarServico']);

    Route::get('/logout', [loginUser::class, 'logout']);
});
