<?php

include "produtos.php";

$p1 = new Produto();

$p1->setPreco(6);
echo "Preço: " . $p1->getPreco() . "<br>";
$p1->setPreco(0);
echo "Preço: " . $p1->getPreco() . "<br>";
$p1->setPreco(-16);
echo "Preço: " . $p1->getPreco() . "<br>";

?>