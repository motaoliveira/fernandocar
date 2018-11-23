<?php
	session_start();

	//include('protect.php');
	// include('../conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$novaCorbar = $_POST['novaCorbar'];
	//echo $insBaseCor;
	$sql = "UPDATE `configurar` SET `corMenu` = '$novaCorbar' WHERE `configurar`.`id` = 1;";
		if(true){
		
		  mysql_query($sql);
		 echo "Cor das barras horizontais alterado com sucesso!";
		 header( "location: pagina_principal.php" );	
		 	}
		
 ?>
