<?php

function RecuperarUsuario($conexao, $CPF, $email){ #Função para buscar duas variaveis no banco de dados. o CPF e o email na determinada conexao q foi feita.


$query = "select * from usuarios where CPF = '{$CPF}' and email = '{$email}'"; #essa é a função SQL q será colocada no banco de dados para executar.
$resultado = mysqli_query($conexao, $query);
$usuario = mysqli_fetch_assoc($resultado);
return $usuario;


}






?>
