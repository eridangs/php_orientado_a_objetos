<?php

class Carro {
    private $marca = "Chevrolet";
    private $modelo = "Fusca";
    private $ano_fabricacao = 1980;

    public function MostrarDados(){
        // $this->marca = $marca;
        // $this->modelo = $modelo;
        // $this->ano_fabricacao = $ano_fabricacao;
        echo "O carro é um ".$this->modelo." da marca ".$this->marca." do ano ".$this->ano_fabricacao;
    }
}

$fusquinha = new Carro();
$fusquinha->MostrarDados();