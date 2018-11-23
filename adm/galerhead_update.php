<?php 
session_start();
include("globais.php");


//$data = $date[0].$date[1].$date[2].$date[3].$date[4].$date[5].$date[6].$date[7].$date[8].$date[9];
//$hora = $date[11].$date[12].$date[13].$date[14].$date[15];

//print_r ($_POST);
//print_r ($_FILES);

	$id = $_POST['hide'];
	$dir_upload = "../galeria/$id/img/";
	
	$max_size = 2000000;
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	//$galery = $_POST['galery'];
	//$mensage = $_POST['tex'];
	$nome = @$_FILES['exemplo']['name'];
	
	//echo $nome;
	$extensao = @end(explode('.',$nome)); 
	$nomearquivo = @current(explode('.',$nome));
	
	
	if(!$_FILES['exemplo']['name']){
	 		$sql = "SELECT * FROM `galeria` WHERE `id`=$id";
			$query = mysql_query($sql);
			
			while ($db = mysql_fetch_assoc($query))
			{
			//echo "entrou aqui";
			
				$novonome = $db['img'];}
				 
		}else{
		$novonome = rand().".".$extensao;
		}
	
	
	
	if(isset($_POST)==1){
	mysql_query("UPDATE `galeria` SET `img` = '$novonome', `titulo` = '$titulo', `descri` = '$descricao' WHERE `galeria`.`id` = $id;");
	//UPDATE `atuacao` SET `id` = '$', `img` = '$', `titulo` = '$', `descri` = '$', `texto` = '$' WHERE `atuacao`.`id` = 9;
						};

	if ($_FILES['exemplo']['size'] <= $max_size && $_FILES['exemplo']['size'] > 0) {
		//$new_name = $_FILES['exemplo']['name'];
		$copied = copy($_FILES['exemplo']['tmp_name'], $dir_upload . $novonome);
		$_SESSION['line1'] = '10';
		
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