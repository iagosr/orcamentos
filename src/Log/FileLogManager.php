<?php

namespace Iago\DesignPattern\Log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWritter(): Logwriter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}
