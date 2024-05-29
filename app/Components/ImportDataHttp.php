<?php

namespace App\Components;
use GuzzleHttp\Client;

class ImportDataHttp
{

    public $client;
    public function __construct()
    {
        $this->client = new Client([

        ]);

    }
}
