<?php

namespace tantrum_elastic\Exception;

class Client extends Request
{
    public function __construct($message, $code, \GuzzleHttp\Exception\ClientException $ex)
    {
        parent::__construct($message, $code, $ex);
    }
}
