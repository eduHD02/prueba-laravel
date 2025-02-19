<?php

namespace App\Services;

use App\Infrastructure\Clients\DBClient;
use Illuminate\Http\JsonResponse;

class RegisterMensaje
{
    protected DBClient $dBClient;

    public function __construct(DBClient $dBClient)
    {
        $this->dBClient = $dBClient;
    }

    public function execute(String $topic, String $msg): JsonResponse
    {
        echo"voy a insertar";
        $ok = $this->dBClient->insertMsgToDB([$topic,$msg]);
        if ($ok) {
            return new JsonResponse(['message' => 'Usuario insertado correctamente'], 201);
        }
        return new JsonResponse(['message' => 'Error al insertar usuario'], 409);
    }
}