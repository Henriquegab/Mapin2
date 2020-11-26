<?php
include ("head.html");
include("logado.php");
require_once("issets.php");
?>



<?php #formulario de login ?>




<section class="hero is-success is-fullheight" >
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Map-in</h3>
                    <h3 class="title has-text-grey"></h3>


                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="CPF" maxlength="11" type="number" class="form-control" placeholder="CPF (Somente números)" autofocus="" >
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
                        <a href="formulario_senha.php">Esqueceu sua senha?</a>    
                        <?php #link pra mudar a senha ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </body> 