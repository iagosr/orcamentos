<?php

namespace Iago\DesignPattern\NotaFiscal;


class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
    public function build(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();

        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.02;

        return $this->notaFiscal;
    }
}
