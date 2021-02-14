<?php

namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct{
    public function acelerar():void{
        echo "acelerando tesla modelo s! \n";
    }

    public function frear():void{
        echo "freando tesla modelo S! \n";
    }

    public function trocarMarcha():void{
        echo "trocando marcha tesla modelos S!\n";
    }
}