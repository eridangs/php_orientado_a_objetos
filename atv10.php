<?php
class DivisionByZeroException extends Exception{}

class Calculadora {
    public function dividir($a, $b){
        if ($b == 0) {
            // Lançando a exceção personalizada se o denominador for zero
            throw new DivisionByZeroException("Erro: Tentativa de dividir por zero.");
        }
        return $a / $b;
    }
}
try {
    $calculadora = new Calculadora();
    $resultado = $calculadora->dividir(10, 7);
    echo "Resultado da divisão: " . $resultado;
} catch (DivisionByZeroException $e) {
    echo $e->getMessage(); 
}
?>