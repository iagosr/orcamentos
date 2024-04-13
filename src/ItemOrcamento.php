<?php

namespace Iago\DesignPattern;

//cria class
class ItemOrcamento implements Orcavel
{
    //cria atributos
    public float $valor;

    //cria metodo
    public function valor(): float
    {
        return $this->valor;
    }
}
