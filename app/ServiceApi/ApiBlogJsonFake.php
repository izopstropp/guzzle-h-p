<?php

namespace App\ServiceApi;
use App\ServiceApi\Contracts\ApiBlogContract;
use GuzzleHttp\client;

class ApiBlogGuzzle implements ApiBlogContract{

    private $client;

    public function __construct(){
          $this->client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'https://jsonplaceholder.typicode.com',
                // You can set any number of default request options.
                'timeout'  => 5.0,
            ]);
    }
    public function all(){
       return $this->client->request('GET','/posts');

    }
}
