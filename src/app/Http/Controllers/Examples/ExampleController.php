<?php

namespace App\Http\Controllers\Examples;

use App\Services\Examples\ExampleService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ExampleController extends Controller
{
    private ExampleService $service;

    public function __construct()
    {
        $this->service = new ExampleService();
    }

    public function build(): Response
    {
        $report = Pdf::loadView('modules/examples/example', [
            'data' => $this->service->get()
        ]);

        return $report->stream('example.pdf');
    }
}
