<?php

include("senha.php");

if ($_POST["novasenha"]||$_POST["novasenha2"]==null) {
	header("Location: formulario_recupera.php?errado=0");
}

if ($_POST["novasenha"]!=$_POST["novasenha2"]) {
	header("Location: formulario_recupera.php?errado=1");
}

$sena=md5($novasenha2);
$sql_code2 = "UPDATE usuarios SET senha = '$sena' WHERE CPF = '{$_POST["CPF"]}'";
$sql_query2 = mysqli_query($conexao,$sql_code2) or die($mysqli->error);






?>