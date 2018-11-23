<?php 

session_start();

include("globais.php");
$message = '';
$dir_upload = 'upload/';
$max_size = 2000000;

$file = $_FILES['exemplo'];
//print_r($_POST);
$linknovo = $file['name'];

$select = $_POST["updateDepart"];
mysql_query("UPDATE `clubedoa_fsa`.`categorias` SET `linkimg` = '$linknovo' WHERE `categorias`.`id` = $select;");

if ($file['size'] <= $max_size && $file['size'] > 0) {
	$new_name =$file['name'];
	$copied = copy($file['tmp_name'], $dir_upload . $new_name);
	
	header( "location: http://http://www.clubedoarfsa.com.br/clubedoar/adm/pagina_principal.php" );	
	if ($copied) {
		$message = 'Ok!';
	} else {
		$message = 'Erro!';
	}
} else {
	$message = 'Max file size 2mb!';
}

//echo json_encode(array("message" => $message));

?>
