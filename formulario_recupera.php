<?php 
include("cabecalho.php");
include("conexao.php");
#include("senha.php");


if (isset($_GET["errado"])&& $_GET["errado"]=='0') { ?>
	<p class="alert-danger">As senhas não podem ser vazias!</p>
	<?php
}
if (isset($_GET["errado"])&& $_GET["errado"]=='0') { ?>
	<p class="alert-danger">As senhas não batem!</p>
	<?php
}
?>


<h2>Recuperação de senha</h2>
		<form action="nova_senha.php" method="post">
			<table class="table">
				<tr>
					<td>Nova Senha</td>
					<td><input class="form-control" type="password" name="novasenha"></td>
				</tr>
				<tr>
					<td>Confirmar Nova Senha</td>
					<td><input class="form-control" type="password" name="novasenha2"></td>
				</tr>
				
				<td><button type="submit" class="btn btn-primary">Confirmar</button></td>
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
