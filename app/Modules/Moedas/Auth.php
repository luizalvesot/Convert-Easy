<?php

namespace App\Modules\Moedas;

abstract class Auth
{
    protected $authorization;
    protected $domain;

    public function __construct()
    {
        $this->domain = config('moedas.domain');
        $username = config('moedas.username');
        $token = config('moedas.token');

        $this->authorization = 'Basic ' . base64_encode("$username/token:$token");
    }
}
