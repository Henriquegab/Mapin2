<?php
include ("conexao.php");
include ("usuario.php");
function CadastroUsuario($conexao,$nome,$email, $CPF, $senha){

$busca = BuscaUsuarioCPF($conexao, $CPF);
if ($busca==null) {

	$busca = BuscaUsuarioEmail($conexao, $email);
	if ($busca==null) {
		$senhamd5 = md5($senha); # A senha recebida nessa função é encriptografada em md5 e se o resultado bater com o do banco de dados, ela será aceita.
	
	$query = "insert into usuarios (CPF , senha, nome, email) values ('$CPF', '$senhamd5','$nome','$email')"; #essa é a função SQL q será colocada no banco de dados para executar.
	$inseriu = mysqli_query($conexao, $query);# coloca o resultado da operação no sql nessa variavel pra poder ver depois se foi cadastrado ou não
	return 1;
	}

	

}
if ($busca!=null) {
 	return 0;
	#se a busca dessa matricula com essa senha não existir, é voltado para o menu com a mensagem de erro.
 }

	



die();

}

?>


