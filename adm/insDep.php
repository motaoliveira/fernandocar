<?php
	session_start();

	include('protect.php');
	//include('conect.php');
	include('globais.php');
	
	//print_r($_POST);
	$insDep = $_POST['insDep'];
	//echo $insBaseCor;
	$sql = "INSERT INTO `clubedoa_fsa`.`categorias` (`id`, `tipo`, `linkimg`) VALUES (NULL, '$insDep', 'produto-sem-imagem.gif');";
		if(true){
		
		 mysql_query($sql);
		 	//header( "location:pagina2.php" );
			
			echo "Novo Departamento criado com sucesso!";
		 	}
		
 ?>
