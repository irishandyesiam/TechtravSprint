<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class TastyController extends Controller
{
    /*The remote server's SSL certificate or SSH fingerprint was deemed not OK.
    This error code has been unified with CURLE_SSL_CACERT since 7.62.0.
    Its previous value was 51.Installed OpenSSL, Strawberry Perl, NASM and set up PATHs 
    to check if remote server's SSL certificate is valid. cmd prompts still not recognized.*/

    /*No such host is know? 
        PS C:\Users\User\Desktop\TechtravSprint\TechtravSprint\Cookbook> openssl s_client -connect tasty.p.rapidapi.com.443
        A43D0000:error:10080002:BIO routines:BIO_lookup_ex:system lib:crypto\bio\bio_addr.c:738:No such host is known. 
        connect:errno=11001*/
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
