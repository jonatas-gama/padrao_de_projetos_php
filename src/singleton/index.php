<?php

namespace Singleton;

require_once '../../vendor/autoload.php';

$instancia = LogsSingleton::obterInstancia();
$novaInstancia = LogsSingleton::obterInstancia();

$logar = LogsSingleton::gravarLog(["user" => "gabriella"]);
if($instancia === $novaInstancia){
    echo "as insancias são exatamente iguais";
}