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
        //$this->url = env("INTERNAL_URL_PROJECT_API");
        //$this->path = '/example';
    }

    public function get(int $id): array
    {
        // $response = $this->client->get( $this->url. "$this->path/path/$id");
        // $response->json()['data']
        return [
            [
                'id' => 1,
                'name' => 'Examples 1',
                'age' => 20
            ],
            [
                'id' => 2,
                'name' => 'Examples 2',
                'age' => 30
            ],
            [
                'id' => 3,
                'name' => 'Examples 3',
                'age' => 40
            ],
            [
                'id' => 4,
                'name' => 'Examples 4',
                'age' => 50
            ]
        ];
    }
}
