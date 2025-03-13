<?php
abstract class Forma {
    abstract public function area();
}

class Retangulo extends Forma {
    private $largura;
    private $altura;
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
    public function area() {
        return $this->largura * $this->altura;
    }
}
class Circulo extends Forma {
    private $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function area() {
        return pi() * pow($this->raio, 2);
    }
}
$retangulo = new Retangulo(5, 10);
$circulo = new Circulo(7);
echo "Área do Retângulo: " . $retangulo->area() . "<br>";
echo "Área do Círculo: " . $circulo->area() . "\n";
?>
 