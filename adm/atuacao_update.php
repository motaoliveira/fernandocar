<?php 
session_start();
include("globais.php");


//$data = $date[0].$date[1].$date[2].$date[3].$date[4].$date[5].$date[6].$date[7].$date[8].$date[9];
//$hora = $date[11].$date[12].$date[13].$date[14].$date[15];

//print_r ($_POST);
//print_r ($_FILES);

	$id = $_POST['hide'];
	$dir_upload = "../atuacao/$id/img/";
	
	$max_size = 2000000;
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$mensage = $_POST['tex'];
		if(!$_FILES['exemplo']['name']){
	 		$sql = "SELECT * FROM `atuacao` WHERE `id`=$id";
			$query = mysql_query($sql);
			
			while ($db = mysql_fetch_assoc($query))
			{
			//echo "entrou aqui";
			
				$name = $db['img'];}
				 
		}else{
		$name = $_FILES['exemplo']['name'];
		}
	
	
	
	if(isset($_POST)==1){
	mysql_query("UPDATE `atuacao` SET `img` = '$name', `titulo` = '$titulo', `descri` = '$descricao', `texto` = '$mensage' WHERE `atuacao`.`id` = $id;");
	//UPDATE `atuacao` SET `id` = '$', `img` = '$', `titulo` = '$', `descri` = '$', `texto` = '$' WHERE `atuacao`.`id` = 9;
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