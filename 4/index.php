<?php

include "carro.php";

$c1 = new Carro();

$c1 -> setMarca("wolksvagem");
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->getVelocidade();
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->getVelocidade();
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->getVelocidade();
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->getVelocidade();
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->getVelocidade();


?>