<?php

namespace App\Services;

use GuzzleHttp\Client;

class HttpClientService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://tasty.p.rapidapi.com',
            'headers' => [
                'X-RapidAPI-Key' => '07710484e3msh42b10869d913fd2p1180a4jsn6142c9c0fe21',
                'X-RapidAPI-Host' => 'tasty.p.rapidapi.com'
            ]
        ]);
    }

    public function get(string $uri, array $query = [])
    {
        $response = $this->client->get($uri, [
            'query' => $query
        ]);

        return $response->getBody();
    }
}


