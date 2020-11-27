<?php 
require_once("logado.php");
require_once("header.php");
#include ("head.html");
?>
<?php
session_start();
$token = md5(session_id());
logado();
?>
<?php

		echo '<a href="Logout.php?token='.md5(session_id()).'">Sair</a>';

?>
	

<?php 

include ("rodape.php");
?> 