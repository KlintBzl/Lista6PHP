<?php

include "produto.php";

$p1 = new Productos();

$p1->setNome("Camiseta");
$p1->setPreco(100);

$p1->aplicarDesconto(20);

echo "Produto: " . $p1->getNome() . "<br>";
echo "Preço com desconto: " . $p1->getPreco();

?>