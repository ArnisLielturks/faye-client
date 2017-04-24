<?php

namespace ArnisLielturks\FayeClient;

interface FayeServiceInterface
{

    public function send($channel, $data = [], $token = '');
}
