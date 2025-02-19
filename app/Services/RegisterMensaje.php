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
        $mensajeData = [
            'topic' => $topic,
            'msg' => $msg,
            'created_at' => now()
        ];
        try{
            $ok = $this->dBClient->insertMsgToDB($mensajeData);
            return new JsonResponse(['message' => 'Usuario insertado correctamente'], 201);
        }catch(\Exception $e){
            return new JsonResponse(['message' => 'Error al insertar usuario'], 409);
        }
        
    }
}