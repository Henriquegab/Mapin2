<?php
include ("head.html");
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

<body>


<section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Map-in</h3>
                    <h3 class="title has-text-grey"></h3>


                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="CPF" name="number" class="form-control" placeholder="CPF (Somente números)" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="form-control" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <a href="formulario_cadastro.php">Cadastrar</a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                        <a href="senha.php">Esqueceu sua senha?</a>    
                        <?php #link pra mudar a senha ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </body> 