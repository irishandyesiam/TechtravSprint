<?php

namespace App\Http\Controllers;

use Http\Client\HttpClientFactory;


class TastyController extends Controller
{
    private $httpClient;

    public function __construct(HttpClientFactory $httpClient)
    {
        $this->httpClient = $httpClient->create();
    }

    public function index()
    {
        $response = $this->httpClient->get('/recipes/list', [
            'query' => [
                'from' => '0',
                'size' => '20',
                'q' => 'sour cream'
            ]
        ]);

        return response($response->getBody());
    }
}
