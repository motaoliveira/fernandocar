<?php
	
	
	include('protect.php');
	include('conect.php');
	@$id = $_POST['id'];
	if(@$_POST){
	
	mysql_query("UPDATE `cliente` SET `mail` = '0' WHERE `cliente`.`id` = $id;");}
?>