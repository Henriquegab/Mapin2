<?php 
function insertspace($conect ,$prefixo, $nome, $predio,$tamanho,$capacidade,$andar)
		{
			$queryspace = "insert into espacos (prefixo_id, nome_espaco, predio_id,tamanho,capacidade,andar) values ('{$prefixo}', {$nome}, {$predio},{$tamanho},{$capacidade},{$andar})";
			return mysqli_query($conect, $queryspace);
		};

function listspace($conect)
{
	$espacos = array();
	$result = mysqli_query($conect,"select * from espacos");
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
		$querybuild = "insert into predio ( nome_predio , predio_id, quantidade_espaco) values ('{$nome}', {$predio}, {$quantidade})";
			return mysqli_query($conect, $querybuild);
	};

?>
