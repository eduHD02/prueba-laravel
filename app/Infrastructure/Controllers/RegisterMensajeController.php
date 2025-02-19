<?php

namespace App\Infrastructure\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\RegisterMensaje;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;

class RegisterMensajeController extends Controller
{
    protected RegisterMensaje $registerMensaje;

    public function __construct(RegisterMensaje $registerMensaje)
    {
        $this->registerMensaje = $registerMensaje;
    }

    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $topic = $request->input('topic');
        $msg   = $request->input('msg');

        try {
            return $this->registerMensaje->execute($topic, $msg);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}