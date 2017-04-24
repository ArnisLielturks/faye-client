<?php

namespace ArnisLielturks;

interface FayeServiceInterface
{

    public function send($channel, $data = [], $token = '');
}
