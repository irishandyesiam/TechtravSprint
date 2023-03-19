<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class TastyController extends Controller
{
    

    public function index()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => '07710484e3msh42b10869d913fd2p1180a4jsn6142c9c0fe21',
	        'X-RapidAPI-Host' => 'tasty.p.rapidapi.com'
        ])->get('https://tasty.p.rapidapi.com/recipes/list', [
            'from' => '0',
	        'size' => '20',
	        'q' => 'sour cream'
        ]);


        return response($response->getBody());
    }
}
