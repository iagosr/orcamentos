<?php

namespace Iago\DesignPattern\Pedido;

use Iago\DesignPattern\Orcamento;

class CriadorDePedido
{
    public $templates = [];

    public function criaPedido(string $nomeCliente, string $dataFormata, Orcamento $orcamento): Pedido
    {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormata);
        $pedido = new Pedido;
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido(string $nomeCliente, string $dataFormata): TemplatePedido
    {
        $hash = md5($nomeCliente . $dataFormata);

        if (!array_key_exists($hash, $this->templates)) {
            $this->templates[$hash] = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormata));
        }

        return $this->templates[$hash];
    }
}
