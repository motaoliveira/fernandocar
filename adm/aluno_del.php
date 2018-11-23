<?php
session_start();
	include_once('conect.php');


	$id = $_POST['id'];
	$file = $_POST['file'];
	//echo $id;
	//$caminhoarquivo = "../atuacao/$id/img/$file";
	$subdir = "../aluno/$id/img/";
	$dir = "../aluno/$id";


	if($_POST)
	{
		$sql = "DELETE FROM `aluno` WHERE `aluno`.`id` = $id";
		$deletando = mysql_query($sql);
		$tudo = scandir($subdir);

		$arquivos = array_slice($tudo, 2);
		$qtd = count($arquivos);
		echo $qtd;
		for($i=0; $i<=$qtd; $i++){


			$delfile = @unlink($subdir."/".$arquivos[$i]);

		}

		rmdir($subdir);

		rmdir("../aluno/$id");

		}
		$_SESSION['line1'] = "12";
		header( "location: pagina_principal.php" );



?>
