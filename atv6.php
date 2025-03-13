<?php
Class Movimentavel{
    public $automovel;
    public function __construct($automovel) {
        $this->automovel = $automovel;
    }
    public function Mover(){
        echo $this->automovel. ' está se movendo <br>';
    }
}
class Carro extends Movimentavel{
    
}
class Bicicleta extends Movimentavel{
    
}
class Moto extends Movimentavel{

}
$carro = new Carro("O carro ");
$carro->Mover();
$bicicleta = new Bicicleta("A bicicleta ");
$bicicleta->Mover();
$moto = new Moto("A moto ");
$moto->Mover();
