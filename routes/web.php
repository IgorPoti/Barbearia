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

    Route::get('/agendamento', function () {
        return view('agendamento');
    });



    Route::get('/logout', [loginUser::class, 'logout']);
});

Route::middleware(["userLogged", "userAdmin"])->group(function () {
    Route::get('/gerenciarservicos', [ServicesController::class, 'indexAdmin']);
    Route::post('/deleteservice/{id}', [ServicesController::class, 'delete']);
    Route::post('/registrando/servico', [ServicesController::class, 'store']);


    Route::get('/editandoservico/{id}', [ServicesController::class, 'indexEditar']);
    Route::post('/editandoservico/{id}/save', [ServicesController::class, 'edit']);

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });


    Route::get('/criarservico', [ServicesController::class, 'indexCriarServico']);

});
