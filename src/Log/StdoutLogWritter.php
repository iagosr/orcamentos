<?php

namespace Iago\DesignPattern\Log;

class StdoutLogWritter implements Logwriter
{
    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}
