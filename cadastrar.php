<?php 
include("conexao.php");
include("cadastro_usuario.php");




$inseriu = CadastroUsuario($conexao,$_POST["nome"],$_POST["email"], $_POST["CPF"], $_POST["senha"]);


if ($inseriu) {

	header("Location: index.php?cadastro=1");
	
	#se deu certo, ele prosegue para o menu.
}


else{
	
	header("Location: index.php?cadastro=0");
	#se deu errado, ele volta pra tela de login
}

die();


?>