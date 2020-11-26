<?php 
include("conexao.php");
include("recuperar_senha.php");
require_once("cadastro_usuario.php");

$confereCPF = validaCPF($_POST["CPF"]);

if ($confereCPF == false) {
	header("Location: formulario_senha.php?errocpf=0");
}

$confere = RecuperarUsuario($conexao, $_POST["CPF"]);



if ($confere==1) {

	header("Location: index.php?senha=1");
	
	#se deu certo, ele prosegue para o menu.
	
}


if ($confere==0) {
		header("Location: index.php?senha=0");
	#se deu errado, ele volta pra tela de login

	}	
	
	

	



die();


?>