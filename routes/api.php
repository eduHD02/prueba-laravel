<?php

    use App\Infrastructure\Controllers\RegisterMensajeController;
    use App\Infrastructure\Controllers\GetMensajesController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::post('/nuevo-msg', RegisterMensajeController::class);
    Route::get('/msg', GetMensajesController::class);
