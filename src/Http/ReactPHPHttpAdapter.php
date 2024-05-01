<?php

namespace Iago\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        echo "ReactPHP: Dados enviados para a API";
    }
}
