<?php

function BuscaUsuario($conexao, $CPF, $senha){ #Função para buscar duas variaveis no banco de dados. a matricula e a senha na determinada conexao q foi feita.

$senhamd5 = md5($senha); # A senha recebida nessa função é encriptografada em md5 e se o resultado bater com o do banco de dados, ela será aceita.
$query = "select * from usuarios where CPF = '{$CPF}' and senha = '{$senhamd5}'"; #essa é a função SQL q será colocada no banco de dados para executar.
$resultado = mysqli_query($conexao, $query);
$usuario = mysqli_fetch_assoc($resultado);
return $usuario;


}






?>