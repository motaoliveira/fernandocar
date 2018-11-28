<?php
session_start();
include("globais.php");
//$data = $date[0].$date[1].$date[2].$date[3].$date[4].$date[5].$date[6].$date[7].$date[8].$date[9];
//$hora = $date[11].$date[12].$date[13].$date[14].$date[15];
print_r ($_POST);
//print_r ($_FILES);
	$id = $_POST['hide'];
	$nome = $_POST['cliente'];
	$cel = 1;
	$email = 1;
	$senha = 1;
	$rua = 1;
	$numero = $_POST['numero'];
	$cep = 1;
	$bairro = 1;

	$dir_upload = "../clientes/$id/img/";
	$max_size = 2000000;
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$mensage = $_POST['tex'];
	if(!$_FILES['exemplo']['name']){
		$sql = "SELECT * FROM `cliente` WHERE `id`=$id";
		$query = mysql_query($sql);
		while ($db = mysql_fetch_assoc($query))
		{
		//echo "entrou aqui";
		$name = $db['but'];}
	}else{
		$name = $_FILES['exemplo']['name'];
	}
	if(isset($_POST)==1){
	mysql_query("UPDATE `u644261243_av`.`cliente` SET `nome` = '$nome', `email` = '$email', `celular` = '$cel', `login` = '$login', `senha` = '$senha', `rua` = '$rua', `numero` = '$numero', `bairro` = '$bairro', `cep` = 'cep', `but` = '$name' WHERE `cliente`.`id` = $id;");
	//
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
