<?php

namespace App\Services;

use App\Infrastructure\Clients\DBClient;
use Illuminate\Http\JsonResponse;

class GetMensajes
{
    protected DBClient $dBClient;

    public function __construct(DBClient $dBClient)
    {
        $this->dBClient = $dBClient;
    }

    public function execute(): JsonResponse
    {   
        $dbResponse = $this->dBClient->getAllMsgFromDB();
        return response()->json($dbResponse);
    }
}