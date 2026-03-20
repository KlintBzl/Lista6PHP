<?php

include "pessoa.php";

$pessoa1 = new Pessoas("Klint", 17);

echo $pessoa1->getNome() . "<br>";
echo $pessoa1->getIdade() . "<br>";


?>