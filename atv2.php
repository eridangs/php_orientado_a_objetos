<?php
class Pessoa{
    public $nome;
    public $idade;
    public $sexo;
    public function __construct($nome,$idade,$sexo){
        $this->nome= $nome;
        $this->idade= $idade;
        $this->sexo= $sexo;
    }

    public function Falar(){
        echo 'Meu nome é '.$this->nome.' e tenho '.$this->idade.' anos.';
    }
}
$pessoa = new Pessoa('Lara','17','feminino');
$pessoa->Falar();