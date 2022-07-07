<?php

require __DIR__ . '/vendor/autoload.php';

use App\Files\CriarNomeArquivo\CriarNomeArquivoAleatorio;

use App\Files\CriarCSV\CriarCSV;

$dados = [
    [
        'ID',
        'Nome',
        'Descrição'
    ],
    [
        1,
        'Produto Teste',
        'Produto Teste'
    ],
    [
        2,
        'Produto Teste dois',
        'Produto Teste dois'
    ]
];

$sucesso = CriarCSV::criarArquivo(__DIR__.'/files/'.CriarNomeArquivoAleatorio::NomeAleatorio().'.csv', $dados,);

 var_dump($sucesso);
