<?php

function RecuperarUsuario($conexao, $CPF, $email){ #Função para buscar duas variaveis no banco de dados. o CPF e o email na determinada conexao q foi feita.


$query2 = "select * from usuarios where CPF = '{$CPF}' and email = '{$email}'"; #essa é a função SQL q será colocada no banco de dados para executar.
#echo "$query2";
$resultado2 = mysqli_query($conexao, $query2);
#$usuario = mysqli_fetch_assoc($resultado2);
return $resultado2;


}






?>
