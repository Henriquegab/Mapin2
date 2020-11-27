<?php 
function insertspace($conect ,$prefixo, $nome, $predio,$tamanho,$capacidade,$andar)
		{
			$queryspace = "insert into espacos (prefixo_id, nome_espaco, predio_id,tamanho,capacidade,andar) values ('{$prefixo}', {$nome}, {$predio},{$tamanho},{$capacidade},{$andar})";
			return mysqli_query($conect, $queryspace);
		};

function listspace($conect)
{
	$espacos = array();
	$result = mysqli_query($conect,"select e.*,p.nome_predio from espacos as e join predio as p on p.id=e.predio_id");
	while ($space = mysqli_fetch_assoc($result)) 
	{
		array_push($espacos, $space);
	}
	return $espacos;
};


function removespace($conect, $id)
{
	$query = "delete from espacos where id = {$id}";
	return mysqli_query($conect, $query);
};

function insertbuild($conect, $nome, $predio, $quantidade)
	{
		$querybuild = "insert into predio ( nome_predio , id_predio, quantidade_espaco) values ('{$nome}', {$predio}, {$quantidade})";
			return mysqli_query($conect, $querybuild);
	};

function changespace($conect, $id)
{
	$querychange = "select * from espacos where id = {$id}";
	$result= mysqli_query($conect, $querychange);
	return mysqli_fetch_assoc($result);
};
function alterspace($conect ,$id ,$prefixo, $nome, $predio,$tamanho,$capacidade,$andar)
		{
			$queryalter = "update espacos set prefixo_id = '{$prefixo}', nome_espaco = {$nome}, predio_id = {$predio},tamanho = {$tamanho},capacidade = {$capacidade},andar = {$andar} where id = '{$id}'";
			return mysqli_query($conect, $queryalter);
		};

function reservespace($conect, $id)
{
	$query = "select * from espacos where id = {$id}";
	$result = mysqli_query($conect, $query);
	if ($result->num_rows > 0)
	{
		$result = $result->fetch_assoc();//buscando o dado da tabela, colocando em variavel para if
		//while ($result = $result->fetch_assoc()) 
			if($result['usado'] == '0')
			{	
				$queryreserv = "update espacos set usado = '1' where id = '{$id}'";
				?><p class="alert alert-primary" role="alert" 	align="center">SALA RESERVADA</p><?php
				return mysqli_query($conect, $queryreserv);
			}
			else
			{
				$queryreserv = "update espacos set usado = '0' where id = '{$id}'";
				?><p class="alert alert-danger" role="alert" 	align="center">SALA DESOCUPADA</p><?php
				return mysqli_query($conect, $queryreserv);
			}; 
		};
};

?>
