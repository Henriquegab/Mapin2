<?php include("header.php"); ?>
<?php include("functionlist.php");?>
<?php include("conection.php");
require_once("logado.php");
session_start();
$token = md5(session_id());
logado();


$id = $_POST['id'];
removespace($conect, $id);
header("location: spacelist.php?remov=true");
die();
?>

