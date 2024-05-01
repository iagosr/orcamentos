<?php

namespace Iago\DesignPattern\Venda;

use Iago\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
