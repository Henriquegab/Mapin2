<?php
include ("conexao.php");
include ("usuario.php");

function validaCPF($CPF) {
 
    // Extrai somente os números
    $CPF = preg_replace( '/[^0-9]/is', '', $CPF );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($CPF) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $CPF)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $CPF[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($CPF[$c] != $d) {
            return false;
        }
    }
    return true;
}

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


