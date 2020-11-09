<?php 
include("conexao.php");
include("cadastro_usuario.php");




$inseriu = CadastroUsuario($conexao,$_POST["nome"],$_POST["email"], $_POST["CPF"], $_POST["senha"]);


if ($inseriu==1) {

	header("Location: index.php?cadastro=1");
	
	#se deu certo, ele prosegue para o menu.
}


if ($inseriu==0) {
	header("Location: formulario_cadastro.php?erro=0");
	#se deu errado, ele volta pra tela de login
}
	



die();


?>