<?php

namespace App\Services\Examples;

use App\Services\Base\ServiceBase;

class ExampleService extends ServiceBase
{
    private readonly string $url;
    private readonly string $path;

    public function __construct()
    {
        parent::__construct();
        $this->url = env("FAKE_API_URL");
        $this->path = '/users';
    }

    public function get(): array
    {
         $response = $this->client->get( $this->url. "$this->path");
         return $response->json();
    }
}
