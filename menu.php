<?php 

include ("head.html");
?>

<?php

if (isset($_COOKIE["usuario_logado"])==null) {?>
	<?php header("Location: index.php?invalido=0"); ?> <?php }
	#isso é pra ver se o cookie que contem o login da pessoa está definida, ou seja, se está logada.
?>
<?php
if (isset($_COOKIE["usuario_logado"])) {?>
	<p class="text-sucess">Você está logado como <?=$_COOKIE["usuario_logado"]?></p> <?php }
	#isso é pra ver se o cookie que contem o login da pessoa está definida, ou seja, se está logada.
?>


<h1>yay</h1>


<form action="index.php" method="post">
			<table class="table">
				<tr>
				<td><button type="submit" class="btn btn-primary">tela de inicio</button></td><?php
				#botão, tela de inicio 
				?>
				</tr>
			</table>
		</form>

<?php 

include ("rodape2.php");
?>