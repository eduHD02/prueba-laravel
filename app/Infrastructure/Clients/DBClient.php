<?php

namespace App\Infrastructure\Clients;

use App\Models\Mensaje;
use Illuminate\Database\Eloquent\Collection;

/**
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class DBClient
{
    public function getAllMsgFromDB(): Collection
    {
        return Mensaje::all();
    }
    public function insertMsgToDB(array $mensajeData): void
    {
        Mensaje::create($mensajeData);
    }
}