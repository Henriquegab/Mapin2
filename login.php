<?php

include("conexao.php");
include("usuario.php");

$usuario = BuscaUsuario($conexao, $_POST["CPF"], $_POST["senha"]);

if ($usuario == null) {
	header("Location: index.php?login=0");
	#se a busca dessa matricula com essa senha não existir, é voltado para o menu com a mensagem de erro.
}
else{
	setcookie("usuario_logado", $usuario["CPF"]);
	header("Location: menu.php");
	#se deu certo, ele prosegue para o menu.
}

die();




