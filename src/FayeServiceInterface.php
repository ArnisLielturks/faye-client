<?php

namespace App\Services;

interface FayeServiceInterface
{

    public function send($channel, $data = [], $token = '');
}
