<?php

namespace App\Infrastructure\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\ResgisterMensaje;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;

class RegisterMensajeController extends Controller
{
    protected ResgisterMensaje $resgisterMensaje;

    public function __construct(ResgisterMensaje $resgisterMensaje)
    {
        $this->resgisterMensaje = $resgisterMensaje;
    }

    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $topic = $request->input('topic');
        $msg   = $request->input('msg');

        try {
            return $this->resgisterMensaje->execute($topic, $msg);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}