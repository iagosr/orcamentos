<?php

namespace Iago\DesignPattern\Relatorio;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}
