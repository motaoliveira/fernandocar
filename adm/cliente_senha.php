<?php
    session_start();
	include_once('conect.php');
	include_once('../variaveis.php');
	
	
	$id = $_POST['id'];
	$file = $_POST['file'];
	echo $banco;
	//$caminhoarquivo = "../atuacao/$id/img/$file";
	$subdir = "../clientes/$id/img/";
	$dir = "../clientes/$id";
	
	
	if($_POST)
	{
		$sql = "UPDATE `$banco`.`cliente` SET `mail` = '0' WHERE `cliente`.`id` = $id;"; 
		$deletando = mysql_query($sql);
		
		}
		
		//$_SESSION['line1'] = "10";
		// header( "location: pagina_principal.php" );

	
	
?>