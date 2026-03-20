<?php

 class ContaBancaria{

private $titular;
private $saldo;

public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

public function depositar($valor){
$this->saldo = $this->saldo + $valor;
}

public function sacar($valor){
if($this->saldo - $valor < 0){
    echo "ERRO! Você não pode sacar um valor que você não tem! <br>";
}else{
    $this->saldo = $this->saldo - $valor;
}
}

}


?>