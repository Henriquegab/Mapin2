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


<h2>Alteração de senha</h2>
		<form action="nova_senha.php" method="post">
			<table class="table">
				<tr>
					<td>Digite seu CPF (Somente números)</td>
					<td><input class="form-control" placeholder="CPF (Somente números)" type="number" name="CPF"></td>
				</tr>
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

		<form action="menu.php" method="post">
			<table class="table">
				<tr>
				<td><button type="submit" class="btn btn-primary">Voltar</button></td>
				</tr>
			</table>
		</form>



<?php
include ("rodape.php");
?>
