<?php

namespace App\Services;

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests

$request = new HttpRequest();
$request->setUrl('https://tasty.p.rapidapi.com/recipes/list');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'from' => '0',
	'size' => '20',
	'q' => 'sour cream'
]);

$request->setHeaders([
	'X-RapidAPI-Key' => '07710484e3msh42b10869d913fd2p1180a4jsn6142c9c0fe21',
	'X-RapidAPI-Host' => 'tasty.p.rapidapi.com'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}



