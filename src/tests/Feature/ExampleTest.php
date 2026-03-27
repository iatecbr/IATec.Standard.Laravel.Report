<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Http::fake([
            'jsonplaceholder.typicode.com/users' => Http::response([
                [
                    'id' => 1,
                    'name' => 'Test User',
                    'email' => 'test@example.com',
                    'address' => [
                        'street' => 'Main St',
                        'suite' => 'Suite 1',
                        'city' => 'Test City',
                        'zipcode' => '12345-678',
                    ],
                ],
            ], 200),
        ]);

        $response = $this->get('/examples/default');

        $response
            ->assertOk()
            ->assertHeader('content-type', 'application/pdf');
    }
}
