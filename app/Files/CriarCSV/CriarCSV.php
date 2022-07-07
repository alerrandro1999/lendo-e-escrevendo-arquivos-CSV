<?php

namespace App\Files\CriarCSV;

use App\Files\Delimitadores\DelimitadoresDosArquivos;

class CriarCSV
{
    public static function criarArquivo($arquivo, $dados)
    {
        $csv = fopen($arquivo, 'w');
        foreach ($dados as $linha) {
            fputcsv($csv, $linha, DelimitadoresDosArquivos::delimitador());
        }
        fclose($csv);
        return true;
    }
}