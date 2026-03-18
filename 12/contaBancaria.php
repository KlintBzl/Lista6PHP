<?php

 class ContaBancaria{

public $titular;
public $saldo;

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