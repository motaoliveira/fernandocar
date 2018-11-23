<?php 

session_start();

include("globais.php");
$message = '';
$dir_upload = 'lojaimg/';
$max_size = 200000;

$file = $_FILES['familiaimg'];
print_r($_POST);
$linknovo = $file['name'];

echo $linknovo;
$select = trim($_POST["combo3"]);
$select2 = trim($_POST["combo4"]);
mysql_query("UPDATE `clubedoa_fsa`.`subcate` SET `linkimgsub` = '$linknovo' WHERE `subcate`.`tipoSub` = '$select2';");

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
}

//echo json_encode(array("message" => $message));

header( "location: pagina_principal.php" );	

?>
