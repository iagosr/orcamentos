<?php

namespace Iago\DesignPattern\Log;

interface Logwriter
{
    public function escreve(string $mensagemFormatada): void;
}
