<?php

 class Conta{

private $saldo;

public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

public function verSaldo(){
    echo "O saldo da conta é: R$" . $this->saldo;
}

}


?>