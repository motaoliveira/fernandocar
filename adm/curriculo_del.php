<?php
	require('conect.php');
	//require('variaveis.php');
	print_r($_POST);
	$id = $_POST['file'];
	$sql = "DELETE FROM `u644261243_av`.`curriculo` WHERE `curriculo`.`id` = $id";
	$exec = mysql_query($sql);

?>