<?php

 declare(strict_types=1);

 namespace App\Services\DataFromTasty;

 use Illuminate\Http\Client\PendingRequest;
 use Illuminate\Support\Facades\Http;
 use App\Services\DataFromTasty\Collections\RecipeCollection;

 class Services
 {
    public function __construct(
        private string $baseUri,
        private int $timeout,
     ) {}

     public function recipes(): RecipeCollection
     {  
        $request = $this->buildRequest();

        $response = $request->get(
            url: $this->baseUri . 'list'
        );

        if ($response->failed()) {
            throw $response->toException();
        }

        $collection = new RecipeCollection();

        foreach ($response->json() as $item) {
            $collection->add(
                item: $item,
            );
        }
        return $collection;
     }

     private function buildRequest(): PendingRequest
     {   
        return Http::withHeaders(
            headers: [
                'Accept' => 'application/json',
                'X-RapidAPI-Key' => '07710484e3msh42b10869d913fd2p1180a4jsn6142c9c0fe21',
                'X-RapidAPI-Host'=> 'tasty.p.rapidapi.com'
                ]   
        )->timeout(
                seconds: $this->timeout,
        );
     }    
 }