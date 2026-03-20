<?php

include "contaBancaria.php";

$c1 = new ContaBancaria();

$c1->depositar(2000);
echo "Saldo da conta: R$" . $c1->getSaldo() . "<br>";
$c1->depositar(2000);
echo "Saldo da conta: R$" . $c1->getSaldo() . "<br>";
$c1->sacar(2000);
echo "Saldo da conta: R$" . $c1->getSaldo() . "<br>";
$c1->sacar(2000);
echo "Saldo da conta: R$" . $c1->getSaldo() . "<br>";
$c1->sacar(2000);
echo "Saldo da conta: R$" . $c1->getSaldo() . "<br>";

?>