<?php 
include("cabecalho.php");

?>

<?php #formulario de login ?>

	<h2>Recuperação de senha</h2>
		<form action="recuperar_senha.php" method="post">
			<table class="table">
				<tr>
					<td>Digite seu CPF (Somente números)</td>
					<td><input class="form-control" type="number" name="CPF"></td>
				</tr>
				<tr>
					<td>Digite seu Email</td>
					<td><input class="form-control" type="text" name="email"></td>
				</tr>
				<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
				</tr>
			</table>
		</form>







<?php
include ("rodape.php");
?>