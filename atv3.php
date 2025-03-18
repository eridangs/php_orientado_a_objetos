<?php
class DivisionByZeroException extends Exception{}
class ContaBancaria{
    public $titular;
    private $saldo ;
    private $emprestimo;
    private $parcela;

    public function __construct($titular,$saldo,$parcela = 0,$emprestimo=0) {
        $this->$titular = $titular;
        $this->saldo = $saldo;
        $this->parcela = $parcela;
        $this->emprestimo = $emprestimo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function Sacar($saque){
        $saldo = $this->getSaldo();
        if ($saque > 0 && $saque <= $this->saldo){
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
        if ($deposito > 0){
            $this->saldo += $deposito;
            echo 'Deposito de '.$deposito.' reais realizado com sucesso.';
            echo '<br/>';
            return $this->saldo;
        }else{
            "Valor de deposito invalido. <br>";
        }
    }
    public function Consultar(){
        echo 'Seu saldo atual é:'.$this->getSaldo();
        echo '<br>';
    }

    public function Emprestimo($emprestimo,$parcela){
        if ($emprestimo > 0 && $parcela > 1){
            $valor_parcela = $emprestimo/$parcela;
            echo 'Você terá que pagar '.$valor_parcela.' parcelas de: '.$valor_parcela.  ' mensais.<br> Valor total ao final: '.$emprestimo.'<br>';
        }elseif ($parcela == 0){
            throw new DivisionByZeroException("Erro: Não é possível ter 0 parcelas.");
        }
    }
}
$conta = new ContaBancaria("Lara",1000);
// $conta->setSaldo(500);
$conta->Depositar(500);
$conta->Sacar(300);
$conta->Consultar();
try {
    $valor_parcela = $conta->Emprestimo(1000,0);
    echo 'Valor da parcela: R$ '.$valor_parcela.'<br>';
}catch (DivisionByZeroException $e) {
    echo $e->getMessage(); 
}