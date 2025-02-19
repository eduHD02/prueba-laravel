<?php

    use Illuminate\Support\Facades\Route;
    use App\Infrastructure\Controllers\RegisterMensajeController;
    use App\Infrastructure\Controllers\GetMensajesController;

    Route::get('/', fn() => view('welcome'));
    Route::post('/nuevo-msg', RegisterMensajeController::class);
    Route::get('/msg', GetMensajesController::class);
