<?php
	session_start();

	//include('protect.php');
	//include('../conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$novoPainel = $_POST['novoPainel'];
	//echo $insBaseCor;
	$sql = "UPDATE `configurar` SET `corPainel` = '$novoPainel' WHERE `configurar`.`id` = 1; ";
		if(true){
		
		 mysql_query($sql);
		 	//header( "location:pagina2.php" );
			
			echo "Cor da base alterado com sucesso!";
		 	}
		
 ?>
