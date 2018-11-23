<?php 

session_start();

include("globais.php");

print_r($_POST);


// echo $linknovo;
$newName = trim($_POST["newName"]);
$select = trim($_POST["combo1"]);
$select2 = trim($_POST["combo2"]);
mysql_query("UPDATE `clubedoa_fsa`.`subcate` SET `tipoSub` = '$newName' WHERE `subcate`.`categoria` = $select AND `subcate`.`tipoSub` = '$select2';");


?>