<?php

include "produto.php";

$p1 = new Produtos();

$p1 -> nome = "Laptop";
$p1 -> preco = 3500;

echo "Produto: " . $p1->nome . " - R$ " . $p1->preco;

?>