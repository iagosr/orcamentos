<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Http\HttpAdapter;
use Iago\DesignPattern\EstadosOrcamentos\Finalizado;
use Iago\DesignPattern\Orcamento;

class RegistroOrcamento
{

    private HttpAdapter $http;

    public function __construct($http)
    {
        $this->http = $http;
    }


    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API');
        }

        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeItens
        ]);
    }
}
