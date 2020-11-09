<?php
include ("cabecalho.php");
?>

<?php
#se o cadastro deu certo ele retorna pra essa pagina de login com a mensagem de sucesso.
if(isset($_GET["erro"])&& $_GET["erro"]=='1') { ?> <p class="alert-danger">Usuario já cadastrado!</p>

<?php
}



?>



<h2>Cadastro</h2>
		<form action="cadastrar.php" method="post">
			<table class="table">
				<tr>
					<tr>
					<td>Nome</td>
					<td><input class="form-control" type="text" name="nome"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input class="form-control" type="text" name="email"></td>
				</tr>
					<td>CPF (Somente números)</td>
					<td><input class="form-control" type="number" name="CPF"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>

				<tr>
				<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
				</tr>
			</table>
		</form>

<?php
include ("rodape.php");
?>