<?php

namespace App\Http\Controllers;

Use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TastyAPIController extends Controller
{
    public function getTastyAPI()
{
    $client = new Client();
    $response = $client->request('GET', 'https://api.tasty.com/recipes/list', [
        'headers' => [
            'X-RapidAPI-Key' => '07710484e3msh42b10869d913fd2p1180a4jsn6142c9c0fe21',
            'X-RapidAPI-Host' => 'tasty.p.rapidapi.com'
        ],
        'query' => [
            'from' => 0,
            'size' => 10,
            'q' => "sour cream"
        ],
    ]);
    $data = json_decode($response->getBody());
    return response()->json($data);
}

}
