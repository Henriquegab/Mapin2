<?php 
include("conexao.php");
include("recuperar_senha.php");




$confere = RecuperarUsuario($conexao, $_POST["CPF"], $_POST["email"]);



if ($confere) {

	if ($confere==null) {
		echo "verdadeiro";
	}
	
	header("Location: formulario_senha.php?erro=0");
	
	#se deu certo, ele prosegue para o menu.
}


else {
	if ($confere==FALSE) {
		echo "falso";
	}
	
	header("Location: formulario_recupera.php");
	#se deu errado, ele volta pra tela de login

}
	



die();


?>