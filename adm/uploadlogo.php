<?php 


session_start();
include("globais.php");
$message = '';
$dir_upload = 'upload/';
$max_size = 2000000;

$file = $_FILES['example'];
//print_r($_POST);
$linknovo = $file['name'];

// echo $linknovo;
// $select = $_POST["categorzero"];
mysql_query("UPDATE `clubedoa_fsa`.`configurar` SET `logoTopo` = '$linknovo' WHERE `configurar`.`id` = 1;");

if ($file['size'] <= $max_size && $file['size'] > 0) {
	$new_name =$file['name'];
	$copied = copy($file['tmp_name'], $dir_upload . $new_name);

	if ($copied) {
		$message = 'Ok!';
		
	} else {
		$message = 'Erro!';
		header( "location: pagina_principal.php" );	

	}
} else {
	$message = 'Max file size 2mb!';
	header( "location: pagina_principal.php" );	

}

// echo json_encode(array("message" => $message));

header( "location: pagina_principal.php" );	

?>
