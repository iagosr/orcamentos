<?php

namespace Iago\DesignPattern\Venda;

use DateTimeInterface;

class VendaProduto extends Venda
{
    /**
     * @var int
     */
    private int $pesoProduto;

    public function __construct(DateTimeInterface $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}
