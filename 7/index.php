<?php

include "aluno.php";

$a1 = new Aluno();

$a1->setNome("Nicoly");
$a1->setNome("Klint");
$a1->setNota(8);
echo "Nome: " . $a1->getNome() . "<br>";
echo "Nota: " . $a1->getNota() . "<br>";


?>