<?php

namespace ArnisLielturks\FayeClient;

use Nc\FayeClient\Client;
use Nc\FayeClient\Adapter\CurlAdapter;

class FayeService implements FayeServiceInterface
{

    protected $adapter;
    protected $client;
    protected $token;

    public function __construct($config = [])
    {
        $this->adapter = new CurlAdapter();
        $this->client = new Client($this->adapter, $config['server']);
        $this->token = $config['token'];
    }

    public function send($channel, $data = [])
    {
        $this->client->send($channel, $data, [
            'token' => $this->token
        ]);
    }
}
