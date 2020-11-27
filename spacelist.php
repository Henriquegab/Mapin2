<?php include("header.php"); ?>
<?php include("functionlist.php");?>
<?php include("conection.php");?>
<?php
require_once("logado.php");
session_start();
$token = md5(session_id());
logado();
	if(array_key_exists("remov", $_GET) && $_GET["remov"]=="true")
	{?>
		<p class="alert alert-primary" role="alert" align="center">REMOVIDO COM SUCESSO</p>
	<?php
}
?>
<h1 align="center">LISTA DE ESPAÇOS</h1>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
	 <tr>
		<td>TIPO</td>
		<td>NÚMERO</td>
		<td>LOCALIZAÇÃO</td>
		<td>CAPACIDADE</td>
		<td>ALTERAR</td>
		<td>APAGAR</td>
		<td>STATUS</td>
	</tr>
</thead>
<tbody>
	

	<?php 
		$espacos = listspace($conect);
		foreach($espacos as $space) :
	?>

	<tr>
		<td><?= $space ['prefixo_id']?></td>
		<td><?= $space['nome_espaco']?></td>
		<td><?= $space['nome_predio']?></td>
		<td><?= $space['capacidade']?></td>
		<td><a class="btn btn-primary" href="changespace.php?id=<?=$space['id']?>">ALTERAR</a></td>
		<td>
			<form action="removespace.php?" method="post">
				<input type="hidden" name="id" value="<?=$space['id']?>">
				<button class="btn btn-danger">APAGAR</button>
			</form>
		</td>
		<td>
			<form action="reservespace.php?" method="post">
				<?php if($space['usado']==0)
				{?>

					<input type="hidden" name="id" value="<?=$space['id']?>">
				<button class="btn btn-success" value="0">  RESERVAR  </button> <?php
				}
				else{
				?><input type="hidden" name="id" value="<?=$space['id']?>">
				<button class="btn btn-warning" value="0">DESOCUPAR</button><?php		

				}	
				
				?>
				

			</form>
		</td>
		
	</tr>
	<?php 
		endforeach
	?>
	</tbody>
</table>
<?php include("footer.php");?>