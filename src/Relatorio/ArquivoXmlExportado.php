<?php

namespace Iago\DesignPattern\Relatorio;

class ArquivoXmlExportado implements ArquivoExportado
{
    private string $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}></{$this->nomeElementoPai}>");

        foreach ($conteudoExportado->conteudo() as $nomeCampo => $valorCampo) {
            $elementoXml->addChild($nomeCampo, $valorCampo);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');

        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}
