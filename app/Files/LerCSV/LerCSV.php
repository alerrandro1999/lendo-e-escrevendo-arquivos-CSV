<?php

namespace App\Files\LerCSV;

use App\Files\Delimitadores\DelimitadorPontoEVirgula;

class LerCSV
{
    public function VerificarSeArquivoExiste(string $arquivo)
    {
        if (!file_exists($arquivo)) {
            die('Arquivo não existe');
        }
    }

    

    public function lerArquivo(string $arquivo, bool $cabecalho = true)
    {
        $this->VerificarSeArquivoExiste($arquivo);

        $csv =  fopen($arquivo, 'r');

        //cabecalho dos dados
        $cabecalhoDados = $cabecalho ? fgetcsv($csv, 0, DelimitadorPontoEVirgula::delimitador()) : [];

        //interar o arquivo
        while ($linha = fgetcsv($csv, 0, DelimitadorPontoEVirgula::delimitador())) {
            $dados[] = $cabecalho ? array_combine($cabecalhoDados, $linha) : $linha;
        }

        fclose($csv);

        //retorna os dados procesados
        return $dados;
    }

   
}
