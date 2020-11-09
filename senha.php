<?php 
include("conexao.php");
include("recuperar_senha.php");


$recupera = RecuperarUsuario($conexao,$_POST["CPF"],$_POST["email"]);

if ($recupera) {
	
}

?>
