A B C D E F 

<?php 
include("cabecalho.php");
//testando essa porra
?>
<?php
# se o login retornar no post (mensagem na url) o valor 0 pra login, significa q deu erro no login e devera carregar essa pagina com o texto de erro.
if (isset($_GET["login"])&& $_GET["login"]==0) { ?>
	<p class="alert-danger">Usuario ou senha invalidos</p>
	<?php
}



?>
<?php
# se o cadastro retornar no post (mensagem na url) o valor 0 pra cadastro, significa q deu erro no cadastro e devera carregar essa pagina com o texto de erro.
if (isset($_GET["cadastro"])&& $_GET["cadastro"]=='0') { ?>
	<p class="alert-danger">Cadastro não realizado</p>
	<?php
}
?>
<?php
#se o cadastro deu certo ele retorna pra essa pagina de login com a mensagem de sucesso.
if(isset($_GET["cadastro"])&& $_GET["cadastro"]=='1') { ?> <p class="alert-success">Cadastro realizado com sucesso!</p>

<?php
}



?>

<?php
# se a pessoa tentar acessar o menu sem logar, ele retornara pro menu de login com o parametro invalido = 0, mostrando a mensagem q precisa estar logado.
if (isset($_GET["invalido"])&& $_GET["invalido"]=='0') { ?>
	<p class="alert-danger">Você precisa estar Logado para acessar o Sistema!</p>
	<?php
}
?>


<?php #formulario de login ?>

	<h2>Login</h2>
		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>CPF (Somente números)</td>
					<td><input class="form-control" type="number" name="CPF"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
				</tr>
			</table>
		</form>


<?php #botão do cadastro ?>
		<form action="formulario_cadastro.php" method="post">
			<table class="table">
				<tr>
				<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
				</tr>
			</table>
		</form>

		<a href="senha.php">Esqueceu sua senha?</a>    <?php #link pra mudar a senha ?>



<?php
include ("rodape.php");
?>