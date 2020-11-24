<?php include("header.php"); ?>
<?php include("conection.php");?>
<?php include("functionlist.php");?>
<?php 
		
	
		$nome = $_POST["nome"];
		$predio = $_POST["predio"];
		$quantidade = $_POST["quantidade"];
		
		if(insertbuild($conect ,$nome, $predio, $quantidade)) 
		{
		?>
			<p class="alert alert-primary" role="alert" 	align="center">O PRÉDIO FOI CADASTRADO COM SUCESSO</p>
		<?php
		}
		else
		{
			$msg = mysqli_error($conect);
			?>
			<p class="alert alert-danger" role="alert" align="center">OPS: <?= $msg?></p>
			<?php

		}
		mysqli_close($conect);  
			?>
<?php include("footer.php");?>