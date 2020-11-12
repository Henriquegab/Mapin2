<?php 
include("cabecalho.php");




if (isset($_GET["erro"])&& $_GET["erro"]=='0') { ?>
	<p class="alert-danger">Esses dados não existem no Banco de dados</p>
	<?php
}

?>

<?php #formulario de login ?>

	<h2>Recuperação de senha</h2>
		<form action="senha.php" method="post">
			<table class="table">
				<tr>
					<td>Digite seu Nome</td>
					<td><input class="form-control" type="text" name="nome"></td>
				</tr>
				<tr>
					<td>Digite seu CPF (Somente números)</td>
					<td><input class="form-control" type="number" name="CPF"></td>
				</tr>
				<tr>
					<td>Digite seu Email</td>
					<td><input class="form-control" type="text" name="email"></td>
				</tr>
				<tr>
				<td><button type="submit" class="btn btn-primary">Conferir</button></td>
				</tr>
			</table>
		</form>

		<form action="index.php" method="post">
			<table class="table">
				<tr>
				<td><button type="submit" class="btn btn-primary">Voltar</button></td>
				</tr>
			</table>
		</form>







<?php
include ("rodape.php");
?>
