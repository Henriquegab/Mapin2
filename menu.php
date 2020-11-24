<?php 
include("logado.php");
include("header.php");
#include ("head.html");
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

<?php 

include ("rodape.php");
?> 