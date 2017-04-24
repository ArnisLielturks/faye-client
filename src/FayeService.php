<?php

namespace ArnisLielturks;

use Nc\FayeClient\Client;
use Nc\FayeClient\Adapter\CurlAdapter;

class FayeService implements FayeServiceInterface
{

    protected $adapter;
    protected $client;

    public function __construct($config = [])
    {
        $this->adapter = new CurlAdapter();
        $this->client = new Client($this->adapter, $config['server']);
    }

    public function send($channel, $data = [], $token = '')
    {
        $this->client->send($channel, $data, [
            'token' => $token
        ]);
    }
}
