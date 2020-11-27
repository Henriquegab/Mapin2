<?php 
include("conexao.php");
include("cadastro_usuario.php");

if ($_POST["senha"]==$_POST["senha2"]) {
	
	




$confereCPF = validaCPF($_POST["CPF"]);

if ($confereCPF==TRUE) {
	$inseriu = CadastroUsuario($conexao,$_POST["nome"],$_POST["email"], $_POST["CPF"], $_POST["senha"]);


if ($inseriu==1) {

	header("Location: index.php?cadastro=1");
	
	#se deu certo, ele prosegue para o menu.
}


if ($inseriu==0) {
	header("Location: formulario_cadastro.php?erro=0");
	#se deu errado, ele volta pra tela de login
}
	
if ($inseriu==2) {

	header("Location: formulario_cadastro.php?erro=2");
	
	#email invalido
}



die();

}

if ($confereCPF==FALSE) {
	

		header("Location: formulario_cadastro.php?erro=1");


}
}

else{header("Location: formulario_cadastro.php?erro=3");}

die();
?>