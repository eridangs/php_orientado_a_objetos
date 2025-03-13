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
class Zoo {
    public function FazerBarulho(Animal $animal) {
        $animal->fazerSom();
    }
}
$zoo = new Zoo();

$dog = new Cachorro();
$gat = new Gato();

$zoo->FazerBarulho($dog);
$zoo->FazerBarulho($gat);
?>