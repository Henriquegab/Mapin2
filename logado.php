<?php

function logado(){
	if ($_SESSION["usuario_logado"]==FALSE) {
	 header("Location: index.php?invalido=0");  }
	#isso é pra ver se o cookie que contem o login da pessoa está definida, ou seja, se está logada.
	
	die();

}

function LogaUsuario($CPF){

	setcookie("usuario_logado", CPF, time() + 500);
}




?>