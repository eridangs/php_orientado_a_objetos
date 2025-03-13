<?php
Class Animal{
    public $som;
    public function FazerSom(){
        echo 'Esse animal faz um som: '.$this->som;
    }
}
class Cachorro extends Animal{
    public $som = 'au au <br>';
}
class Gato extends Animal{
    public $som = 'miau miau <br>';
}
$dog = new Cachorro();
$dog->FazerSom();
$gat = new Gato();
$gat->FazerSom();

?>