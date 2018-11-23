<?php
	session_start();

	//include('protect.php');

	include('conect.php');
	include('globais.php');
	//print_r($_POST);
	$insCor = $_POST['insCor'];
	//echo $novo;
	$sql = "UPDATE `clubedoa_fsa`.`configurar` SET `corTopo` = '$insCor' WHERE `configurar`.`id` = 1;";//"UPDATE 'loja'.'configurar' SET 'configTitulo' = '$novo' WHERE 'configurar'.'id' = 1;";
		if(true){
		
		 mysql_query($sql);
		 	//header( "location:pagina2.php" );
			
			echo "Nova cor para seu topo de site alterado com sucesso!";
		 	header( "location: pagina_principal.php" );	
			}

 ?>
