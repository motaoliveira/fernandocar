<?php
	session_start();

	include('protect.php');
	//include('conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$catDel= $_POST['catDel'];
	
	
	//echo $numb;
	$sql6 = "DELETE FROM `categorias` WHERE `categorias`.`id` = $catDel";
	//echo $insBaseCor;
	
		if(true){
		
		 mysql_query($sql6);
			echo "Departamento deletado!";
		 	}
		
 ?>
