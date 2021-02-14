<?php

namespace Prototype;

require_once '../../vendor/autoload.php';

$compradores = [
    'Gabriel Andrade',
    'Moriel Mortez',
    'Salvador Dapatria'
];

$livroPhp = new \Prototype\LivroPhpPrototype();
$livroPhp->setTitulo('Padroes de projeto em PHP');

$livros = [];

foreach($compradores as $nomeComprador){
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($nomeComprador);
    $livros[] = $livroComprador;
}

print_r($livros);