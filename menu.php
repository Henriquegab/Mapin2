<?php 
include("logado.php");
include ("head.html");
session_start();
?>

<?php
logado();

?>






		<form action="index.php" method="post">
			<table class="table">
				<tr>
				<td><button type="submit" class="btn btn-primary">tela de inicio</button></td><?php
				#botão, tela de inicio 
				?>
				</tr>
			</table>
		
<a href="senha.php">Solicitar Agendamento</a><br>
<a href="senha.php">Cadastrar Espaços</a><br>
<a href="senha.php">Visualizar Espaços</a><br>
<a href="senha.php">Deferir/Indeferir</a><br>
<?php 

include ("rodape.php");
?> 