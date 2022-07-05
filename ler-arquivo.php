<?php

require __DIR__ . '/vendor/autoload.php';

use App\Files\Csv;

$dados = Csv::lerArquivo(__DIR__.'/files/leitura.csv', true, ';');

echo '<pre>';
print_r($dados);
echo '</pre>';