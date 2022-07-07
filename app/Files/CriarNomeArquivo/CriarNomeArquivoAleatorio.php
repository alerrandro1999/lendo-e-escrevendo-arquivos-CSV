<?php

namespace App\Files\CriarNomeArquivo;

class CriarNomeArquivoAleatorio
{
    public static function NomeAleatorio()
    {
        return "Dados" . time();
    }
}