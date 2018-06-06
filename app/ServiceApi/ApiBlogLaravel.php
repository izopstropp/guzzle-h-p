<?php

namespace App\ServiceApi;
use App\ServiceApi\Contracts\ApiBlogContract;
use GuzzleHttp\client;

class ApiBlogLaravel implements ApiBlogContract{

    private $client;
    public function __construct(){
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000',
            // You can set any number of default request options.
            'timeout'  => 5.0,
        ]);
    }
    public function all(){
        return $this->client->request('GET','/api/v1/post');
    }
}
