<?php

namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct{
    
    public function acelerar(): void{
        echo "acelerando Dodge Charger!\n";
    }

    public function frear(): void{
        echo "freando Dodge Charger!\n";
    }

    public function trocarMarcha(): void{
        echo "trocando marcha do Dodge Charger!\n";
    }
}