<?php

namespace App\Infrastructure\Controllers;

use App\Services\GetMensajes;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;

class GetMensajesController extends Controller
{
    protected GetMensajes $getMensajes;

    public function __construct(GetMensajes $getMensajes)
    {
        $this->getMensajes = $getMensajes;
    }

    public function __invoke(): JsonResponse
    {   
        try {   
            return $this->getMensajes->execute();
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}