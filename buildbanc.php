<?php

function listbuild($conect)
{
	$predio = array();
	$query = "select * from predio";
	$resultado = mysqli_query($conect, $query);
	while ($build = mysqli_fetch_assoc($resultado)) 
	{
		array_push($predio, $build);
	}
	return $predio;
}

?>
