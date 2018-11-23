<?php
	session_start();

	include('protect.php');
	include('globais.php');
	include('conect.php');
	//print_r($_POST);
	$novo = $_POST['novoTit'];
	//echo $novo;
	$sql = "UPDATE `clubedoa_fsa`.`configurar` SET `configTitulo` = '$novo' WHERE `configurar`.`id` = 1;";//"UPDATE 'loja'.'configurar' SET 'configTitulo' = '$novo' WHERE 'configurar'.'id' = 1;";
		if(true){
		
		 mysql_query($sql);
		 	//header( "location:pagina2.php" );	
			echo "Título alterado com sucesso!";
			header( "location: pagina_principal.php" );	
		 	}

 ?>
