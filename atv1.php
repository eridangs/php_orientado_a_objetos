<?php

class Carro {
    private $marca;
    private $modelo;
    private $ano_fabricacao;
    public function __construct($marca,$modelo,$ano_fabricacao) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano_fabricacao = $ano_fabricacao;
    }
    public function MostrarDados(){
        echo 'Marca: '.$this->marca."\n";
        echo 'Modelo: '.$this->modelo."\n";
        echo 'Ano de fabricação: '.$this->ano_fabricacao."\n";
        // echo "O carro é um ".$this->modelo." da marca ".$this->marca." do ano ".$this->ano_fabricacao;
    }
}
echo "Informações do carro:". "<br>";
$fusquinha = new Carro( "Chevrolet<br/>","Fusca<br/>",1980);
$fusquinha->MostrarDados();