<?php

namespace App\Files\Delimitadores;

class DelimitadoresDosArquivos implements Delimitadores
{
    public static function delimitadorPontoEVirgula()
    {
        return ';';
    }

    public static function delimitadorVirgula()
    {
        return '.';

    }
}