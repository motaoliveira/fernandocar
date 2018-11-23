<?php

session_start();
include("globais.php");
//print_r($_POST);
$arquivo = $_POST['name'];
$id = $_POST['id'];
$name = "";

$delfile = unlink("../images/$arquivo"); 

$sql = "UPDATE `banerlateral` SET `img` = '$name' WHERE `banerlateral`.`id` = $id";

echo $sql;
$query = mysql_query($sql);

$_SESSION['line1'] = "7";
header( "location: pagina_principal.php" ); 

?>
