<?php

include("senha.php");

if ($_POST["novasenha"]||$_POST["novasenha2"]==null) {
	header("Location: formulario_recupera.php?errado=0");
}

if ($_POST["novasenha"]!=$_POST["novasenha2"]) {
	header("Location: formulario_recupera.php?errado=1");
}









?>