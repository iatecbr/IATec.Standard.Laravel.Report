<?php

namespace App\Services\Base;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

abstract class ServiceBase
{
    protected   PendingRequest $client;

    public function __construct()
    {
        $this->client = Http::withHeaders([
            "Custom-7You-Authorization" => env('SA_LOGIN_UID')
        ]);
    }
}
