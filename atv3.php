<?php
class ContaBancaria{
    public $titular;
    private $saldo ;

    public function __construct($titular) {
        $this->$titular = $titular;
        $this->saldo = 0;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function Sacar($saque){
        $saldo = $this->getSaldo();
        if ($this->saldo >= $saque){
            $this->saldo -= $saque;
            echo 'Saque de '.$saque.' reais realizado com sucesso.';
            echo '<br>';
            return $this->saldo;
        }else{
            echo 'Não é possivel realizar o saque, valor insuficinte.';
            echo '<br>';
        }
    }
    public function Depositar($deposito){
        $this->saldo += $deposito;
        echo 'Deposito de '.$deposito.' reais realizado com sucesso.';
        echo '<br>';
        return $this->saldo;
    }
    public function Consultar(){
        echo 'Seu saldo atual é:'.$this->getSaldo();
        echo '<br>';
    }
}
$minhaconta = new ContaBancaria("Lara");
$minhaconta->setSaldo(1000);
$minhaconta->Depositar(280);
$minhaconta->Sacar(100);
$minhaconta->Consultar();