<?php
include ("head.html");
?>

<?php
#se o cadastro deu certo ele retorna pra essa pagina de login com a mensagem de sucesso.
if(isset($_GET["erro"])&& $_GET["erro"]=='0') { ?> <p class="alert-danger">Usuario já cadastrado!</p>

<?php
}

?>
<?php
if(isset($_GET["erro"])&& $_GET["erro"]=='1') { ?> <p class="alert-danger">Digite um CPF Válido!!</p>

<?php
}
?>
<?php
if(isset($_GET["erro"])&& $_GET["erro"]=='2') { ?> <p class="alert-danger">Digite um email Válido!!</p>

<?php
}
?>
<?php
if(isset($_GET["erro"])&& $_GET["erro"]=='3') { ?> <p class="alert-danger">As senhas devem ser iguais!</p>

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
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
					<td>CPF (Somente números)</td>
					<td><input class="form-control" type="number" name="CPF" maxlength="11"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				<tr>
					<td>Confirmar Senha</td>
					<td><input class="form-control" type="password" name="senha2"></td>
				</tr>

				<tr>
				<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
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