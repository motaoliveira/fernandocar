<?php
session_start();
include("globais.php");
$message = '';
$dir_upload = '../images/';
$max_size = 2000000;
$file = $_FILES['exemplo'];
//print_r($_POST);
//print_r($_FILES);
//print_r($_SESSION);
$linknovo = $file['name'];
$select = $_POST['carousel'];
$linkurl = $_POST['link'];

@$windows = $_POST['window'];
if(!$_POST['window']){
	$windows = "_self";
}

//echo "<br>".$select[7]."<br>"; echo $linknovo."<br>"; echo $linkurl."<br>"; echo $windows."<br>";


if(isset($_POST)==1){
	mysql_query("UPDATE `carousel` SET `id` = '$select[7]', `banner` = '$select', `img` = '$linknovo', `link` = '$linkurl', `ordem` = '$windows' WHERE `carousel`.`id` = $select[7];");

};


if ($file['size'] <= $max_size && $file['size'] > 0) {
//	$new_name =$file['name'];
	$copied = copy($file['tmp_name'], $dir_upload . $linknovo);
	header( "location: pagina_principal.php" );
	if ($copied) {
		$message = 'Ok!';


	} else {
		$message = 'Erro!';
	}
} else {
	$message = 'Max file size 2mb!';
}

//echo json_encode(array("message" => $message));

header( "location: pagina_principal.php" );
?>
