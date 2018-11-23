<?php
	session_start();

	include('protect.php');
	include('conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$corMenuLat = $_POST['corMenuLat'];
	//echo $insBaseCor;
	$sql = "UPDATE `clubedoa_fsa`.`configurar` SET `tipoMenuLat` = '$corMenuLat' WHERE `configurar`.`id` = 1; ";
		if(true){
		
		 mysql_query($sql);
		 	//header( "location:pagina2.php" );
			
			echo "Cor da base alterado com sucesso!";
		 	}
		
 ?>
