<?php

	include_once('conect.php');
	
	
	$id = $_POST['id'];
	$file = $_POST['file'];
	
	$subdir = "../projeto/$id/img/";
	$dir = "../projeto/$id";
	if($_POST)

	{
		$sql = "DELETE FROM `projeto` WHERE `projeto`.`id` = $id"; 
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
		
	}
?>