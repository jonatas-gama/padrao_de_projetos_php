<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct{
    
    public function acelerar(): void{
        echo "acelerando Dodge Dart!\n";
    }

    public function frear(): void{
        echo "freando Dodge Dart!\n";
    }

    public function trocarMarcha(): void{
        echo "trocando marcha do Dodge Dart!\n";
    }
}