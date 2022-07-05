<?php

require __DIR__ . '/vendor/autoload.php';

use App\Files\Csv;

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

$sucesso = Csv::criarArquivo(__DIR__.'/files/escrita.csv', $dados, ';');
 var_dump($sucesso);
