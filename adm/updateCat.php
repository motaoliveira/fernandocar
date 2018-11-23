<?php
	session_start();

	include('protect.php');
	//include('conect.php');
	include('globais.php');
	
	print_r($_POST);
	$numb= $_POST['catman'];
	$newCat = $_POST['updateCat'];
	
	
	//echo $numb;
	$sql5 = "UPDATE `clubedoa_fsa`.`categorias` SET `tipo` = '$newCat' WHERE `categorias`.`id` = $numb;";
	//echo $insBaseCor;
	
		if(true){
		
		 mysql_query($sql5);
		 	//header( "location:pagina2.php" );
			
			echo "O novo nome para seu departamento é $newCat";
		 	}
		
 ?>
