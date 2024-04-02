<?php

namespace Iago\DesignPattern;

use Iago\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Iago\DesignPattern\GerarPedido;
use Iago\DesignPattern\Orcamento;
use Iago\DesignPattern\Pedido;

class GerarPedidoHandler
{

    private $acoesAposGerarPedido = [];
    public function __construct()
    {
    }

    public function adicionarAcaoAposGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
