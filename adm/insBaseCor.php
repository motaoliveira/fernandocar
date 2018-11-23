<?php
	session_start();

	//include('protect.php');
	// include('../conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$insBaseCor = $_POST['insBaseCor'];
	echo $insBaseCor;
	$sql = "UPDATE `configurar` SET `corBase` = '$insBaseCor' WHERE `configurar`.`id` = 1;";
		if(true){
		
		  mysql_query($sql);
		 echo "Cor da base alterado com sucesso!";
		 	}
		
 ?>
