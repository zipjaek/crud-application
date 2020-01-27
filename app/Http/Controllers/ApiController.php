<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://jsonplaceholder.typicode.com',
        ]);
    }

    public function photos()
    {
        $response = $this->client->request('GET', 'photos');
    
        return json_decode($response->getBody()->getContents() );
    }

    public function todos()
    {
        $response = $this->client->request('GET', 'todos');
    
        return json_decode($response->getBody()->getContents() );
    }
}


