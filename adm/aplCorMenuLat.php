﻿<?php
	session_start();

	include('protect.php');
	//include('conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$corMenuLat = $_POST['aplCorMenuLat'];
	//echo $insBaseCor; UPDATE `configurar` SET `tipoMenuLat` = '$corMenuLat' WHERE `configurar`.`id` = 1;
	$sql = " UPDATE `configurar` SET `tipoMenuLat` = '$corMenuLat' WHERE `configurar`.`id` = 1; ";
		if(true){
		
		 mysql_query($sql);
		 	//header( "location:pagina2.php" );
			
			echo "Cor da base alterado com sucesso!";
		 	}
		
 ?>
