<?php

namespace App\Files\CriarCSV;
use App\Files\Delimitadores\DelimitadorPontoEVirgula;

class CriarCSV
{
    public static function criarArquivo($arquivo, $dados)
    {
        $csv = fopen($arquivo, 'w');
        foreach ($dados as $linha) {
            fputcsv($csv, $linha, DelimitadorPontoEVirgula::delimitador());
        }
        fclose($csv);
        return true;
    }
}