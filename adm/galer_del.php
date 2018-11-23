<?php
	include('protect.php');
	include('conect.php');
	include('globais.php');

	
	$id = $_POST['id'];
	$file = $_POST['file'];
	
	
	$dir = "../galeria/$id";
	$subdir = "$dir/img/";
	//echo $subdirface;
	if($_POST)

	{
		$sql = "DELETE FROM `galeria` WHERE `galeria`.`id` = $id"; 
		$deletando = mysql_query($sql);
		
				$tudo = scandir($subdir);
				$arquivos = array_slice($tudo, 2);
				$qtd = count($arquivos);
				if($qtd>0){
					for($i=0; $i<=$qtd; $i++){ 
						$delfile1 = @unlink($subdir."/".$arquivos[$i]);
					}
					$deldir = rmdir($subdir);
				}else{$deldir = rmdir($subdir);}	
			if($deldir){
				$subdirtwo = "../galeria/$id/fotos";
				$galeria = scandir($subdirtwo);
				$pulando = array_slice($galeria, 2);
				$numerodearq = count($pulando);
				echo $numerodearq;
				if($qtd>0){
					for($i=0; $i<=$numerodearq; $i++){ 
						$delfile2 = @unlink($subdirtwo."/".$pulando[$i]);
						}
					$deldir = rmdir($subdirtwo);
					$deldir = rmdir("../galeria/$id");
				}else{$deldir = rmdir($subdirtwo);
				$deldir = rmdir("../galeria/$id");}
				$_SESSION['line1'] = "10";
				header( "location: pagina_principal.php" );
			};
		$_SESSION['line1'] = "10";
		header( "location: pagina_principal.php" );
	} 

?>