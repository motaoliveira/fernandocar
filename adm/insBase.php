<?php
	session_start();

	include('protect.php');
	include('globais.php');
	//include('conect.php');
	//print_r($_POST);
	$insRodape = $_POST['insRodape'];
	// echo $insRodape; /*
	$sql = "UPDATE `configurar` SET `configRodape` = '$insRodape' WHERE `configurar`.`id` = 1;";
		if(true){
		
		 mysql_query($sql);
			echo "Rodapé alterado com sucesso!";
					 	header( "location: pagina_principal.php" );	

		 	}
//*/
 ?>
