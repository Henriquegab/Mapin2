<?php
require_once("email.php");
require_once("conexao.php");
function RecuperarUsuario($conexao, $CPF){ #Função para buscar duas variaveis no banco de dados. o CPF e o email na determinada conexao q foi feita.

$novasenha = substr(md5(time()),0,6);
$novasenhamd5 = md5($novasenha);
$sql_code = "SELECT email FROM usuarios WHERE CPF = '{$CPF}'";
$sql_query = mysqli_query($conexao,$sql_code) or die($mysqli->error);
$emailbuscado = mysqli_fetch_assoc($sql_query);
$email2 = implode('', $emailbuscado);
$enviado = EnviarEmail($email2, $novasenha);
if ($enviado==1) {
	$sql_code2 = "UPDATE usuarios SET senha = '$novasenhamd5' WHERE CPF = '{$CPF}'";
	$sql_query2 = mysqli_query($conexao,$sql_code2) or die($mysqli->error);
	return 1;
}

return 0;

}


?>
