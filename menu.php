<?php 
include("logado.php");
include ("head.html");
session_start();
?>

<?php
logado();

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
<a href="senha.php">Esqueceu sua senha?</a>    
<?php 

include ("rodape.php");
?> 