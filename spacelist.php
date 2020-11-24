<?php include("header.php"); ?>
<?php include("functionlist.php");?>
<?php include("conection.php");?>
<?php
	if(array_key_exists("remov", $_GET) && $_GET["remov"]=="true")
	{?>
		<p class="alert alert-primary" role="alert" align="center">REMOVIDO COM SUCESSO</p>
	<?php
}
?>

<table class="table table-striped table-bordered">
	<?php 
		$espacos = listspace($conect);
		foreach($espacos as $space) :
	?>
	<tr>
		<td><?= $space ['prefixo_id']?></td>
		<td><?= $space['nome_espaco']?></td>
		
		<td>
			<form action="removespace.php?" method="post">
				<input type="hidden" name="id" value="<?=$space['id']?>">
				<button class="btn btn-danger">APAGAR</button>
			</form>
		</td>
	</tr>
	<?php 
		endforeach
	?>
</table>
<?php include("footer.php");?>