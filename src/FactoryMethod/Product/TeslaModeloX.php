<?php

namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct{
    
    public function acelerar(): void{
        echo "acelerando Tesla modelo X!\n";
    }

    public function frear(): void{
        echo "freando Tesla modelo X!\n";
    }

    public function trocarMarcha(): void{
        echo "trocando marcha do Tesla modelo X!\n";
    }
}