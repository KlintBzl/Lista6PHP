<?php

include "produto.php";

$p1 = new Productos();

$p1->nome = "Camiseta";
$p1->preco = 100;

$p1->aplicarDesconto(20);

echo "Produto: " . $p1->nome . "<br>";
echo "Preço com desconto: " . $p1->preco;

?>