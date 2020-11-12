<?php 
include("conexao.php");
include("recuperar_senha.php");




$inseriu = RecuperarUsuario($conexao, $_POST["CPF"], $_POST["email"], $_POST["nome"]);


if ($inseriu==null) {

	header("Location: formulario_senha.php?erro=0");
	
	#se deu certo, ele prosegue para o menu.
}


if ($inseriu!=null) {
	header("Location: formulario_recupera.php");
	#se deu errado, ele volta pra tela de login
}
	



die();


?>