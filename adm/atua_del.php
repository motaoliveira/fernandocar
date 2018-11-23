<?php
session_start();
	include_once('conect.php');
	
	
	$id = $_POST['id'];
	$file = $_POST['file'];
	//echo $id;
	//$caminhoarquivo = "../atuacao/$id/img/$file";
	$subdir = "../atuacao/$id/img/";
	$dir = "../atuacao/$id";
	if($_POST)
	{
		$sql = "DELETE FROM `atuacao` WHERE `atuacao`.`id` = $id"; 
		$deletando = mysql_query($sql);
		$tudo = scandir($subdir);
		
		$arquivos = array_slice($tudo, 2);
		$qtd = count($arquivos);

		for($i=0; $i<=$qtd; $i++){ 
			
			
			$delfile = @unlink($subdir."/".$arquivos[$i]);
			
		}
		
		$dirImages = rmdir($subdir);
		
		if($dirImages){rmdir($dir);
		
		}
		$_SESSION['line1'] = "9";
		header( "location: pagina_principal.php" );

	}
?>