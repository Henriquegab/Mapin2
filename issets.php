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

<?php
# se a pessoa tentar acessar o menu sem logar, ele retornara pro menu de login com o parametro invalido = 0, mostrando a mensagem q precisa estar logado.
if (isset($_GET["senha"])&& $_GET["senha"]=='0') { ?>
	<p class="alert-danger">Ocorreu algum erro na hora de recuperar a senha!</p>
	<?php
}
?>

<?php
# se a pessoa tentar acessar o menu sem logar, ele retornara pro menu de login com o parametro invalido = 0, mostrando a mensagem q precisa estar logado.
if (isset($_GET["senha"])&& $_GET["senha"]=='1') { ?>
	<p class="alert-success">Senha alterada com Sucesso! Acesse o Email cadastrado nesse CPF para visualizar a nova senha!</p>
	<?php
}
?>
