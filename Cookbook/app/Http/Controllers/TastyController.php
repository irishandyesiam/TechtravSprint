<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class TastyController extends Controller
{
    
    // The remote server's SSL certificate or SSH fingerprint was deemed not OK. This error code has been unified with CURLE_SSL_CACERT since 7.62.0. Its previous value was 51. Installed OpenSSL, Strawberry, and NASM. I set up all PATH. I still cannot build openSSL to retrieve SSL certficate and check if valid.
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
