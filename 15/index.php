<?php

include "Usuario.php";

$u1 = new Usuario("admin@email.com", "1234");
$u1->login("admin@email.com", "1234");
$u2 = new Usuario("usuario@email.com", "4321");
$u2->login("admin@email.com", "1234");

?>