<?php

namespace App\Services;

use http\Client;
use http\Client\Request;
use http\QueryString;

class RecipeService
{
    protected $client;
    protected $apiKey;
    protected $host;

    public function __construct($apiKey, $host)
    {
        $this->client = new Client;
        $this->apiKey = '07710484e3msh42b10869d913fd2p1180a4jsn6142c9c0fe21';
        $this->host = 'tasty.p.rapidapi.com';
    }

    public function searchRecipes($searchTerm)
    {
        $request = new Request;
        $request->setRequestUrl('https://tasty.p.rapidapi.com/recipes/list');
        $request->setRequestMethod('GET');
        $request->setQuery(new QueryString([
            'from' => '0',
            'size' => '20',
            'q' => $searchTerm,
        ]));
        $request->setHeaders([
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->host,
        ]);

        $this->client->enqueue($request)->send();
        $response = $this->client->getResponse();

        return json_decode($response->getBody()->getContents());
    }
}


