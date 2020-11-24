<?php include("header.php"); ?>
<?php include("conection.php");?>
<?php include("functionlist.php");?>
	<?php 
		$prefixo = $_POST["prefixo"];
		$nome = $_POST["nome"];
		$predio = $_POST["predio"];
		$tamanho = $_POST["tamanho"];
		$capacidade = $_POST["capacidade"];
		$andar = $_POST["andar"];
 		if (insertspace($conect, $prefixo, $nome, $predio,$tamanho,$capacidade,$andar,)) 
		{
		?>
			<p class="alert alert-primary" role="alert" align="center"><?= $prefixo ?> <?= $nome ?> com capacidade para <?= $capacidade ?> pessoas foi adicionado com sucesso.</p>
		<?php
		}
		else
		{
			$msg = mysqli_error($conect);
			?>
			<p class="alert alert-danger" role="alert" align="center">A sala: <?= $nome ?> não foi adicionado: <?= $msg?></p>
			<?php

		}
		mysqli_close($conect);
			?>
		 <a href="formspace.php"><button class="btn btn-lg btn-primary" type="submit"> CADASTRAR MAIS SALAS  </button></a>
<?php include("footer.php");?>