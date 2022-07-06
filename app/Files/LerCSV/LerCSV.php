<?php

namespace App\Files;

class LerCSV
{
    
    public static function lerArquivo(string $arquivo, bool $cabecalho = true, $delimitador = ',')
    {
        if (!file_exists($arquivo)) {
            die('Arquivo não encontrado');
        }

        //dados das linhas do arquivo
        $dados = [];

        // abre o arquivo

        $csv =  fopen($arquivo, 'r');

        //cabecalho dos dados
        $cabecalhoDados = $cabecalho ? fgetcsv($csv, 0, $delimitador) : [];

        //interar o arquivo
        while ($linha = fgetcsv($csv, 0, $delimitador)) {
            $dados[] = $cabecalho ? array_combine($cabecalhoDados, $linha) : $linha;
        }

        fclose($csv);

        //retorna os dados procesados
        return $dados;
    }

   
}
