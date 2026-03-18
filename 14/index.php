<?php

include "produtoC.php";
include "carrinho.php";

$p1 = new produtoC("Camiseta", 50);
$p2 = new produtoC("Tênis", 200);
$p3 = new produtoC("Boné", 30);

$carrinho = new Carrinho();

$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);
$carrinho->adicionarProduto($p3);

echo "Total da compra: R$ " . $carrinho->calcularTotal();

?>