<?php

namespace Iago\DesignPattern;

class LogDesconto
{
    public function informar(float $descontoCalculado)
    {
        echo "Salvando log de desconto: $descontoCalculado";
    }
}
