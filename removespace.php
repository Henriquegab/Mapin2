<?php include("header.php"); ?>
<?php include("functionlist.php");?>
<?php include("conection.php");

$id = $_POST['id'];
removespace($conect, $id);
header("location: spacelist.php?remov=true");
die();
?>

