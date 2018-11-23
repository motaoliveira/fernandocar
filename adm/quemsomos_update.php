<?php 
session_start();
include("globais.php");



//$data = $date[0].$date[1].$date[2].$date[3].$date[4].$date[5].$date[6].$date[7].$date[8].$date[9];
//$hora = $date[11].$date[12].$date[13].$date[14].$date[15];

//print_r ($_POST);
//print_r ($_FILES);

	$id = $_POST['hide'];
	$dir_upload = "../quemsomos/1/img/";
	
	$max_size = 2000000;
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	//$texto = $_POST['texto'];
	$mensage = $_POST['tex'];
		if(!$_FILES['exemplo']['name']){
	 		$sql = "SELECT * FROM `quemsomos` WHERE `id`=1";
			$query = mysql_query($sql);
			
			while ($db = mysql_fetch_assoc($query))
			{
			//echo "entrou aqui";
			
				$name = $db['img'];}
				 
		}else{
		$name = $_FILES['exemplo']['name'];
		}
	
	
	
	if(isset($_POST)==1){
	mysql_query("UPDATE `quemsomos` SET `img` = '$name', `titulo` = '$titulo', `descri` = '$descricao', `texto` = '$mensage', `data` = 'data', `hora` = 'hora', `view` = '1' WHERE `quemsomos`.`id` = 1;");
	
						};

	if ($_FILES['exemplo']['size'] <= $max_size && $_FILES['exemplo']['size'] > 0) {
		$new_name = $_FILES['exemplo']['name'];
		$copied = copy($_FILES['exemplo']['tmp_name'], $dir_upload . $new_name);
		
		if ($copied) {
			$message = 'Ok!';
			header( "location: pagina_principal.php" );
	
		} else {
			$message = 'Erro!';
		}
	} else {
		$message = 'Max file size 2mb!';
	}


header( "location: pagina_principal.php" );
?>