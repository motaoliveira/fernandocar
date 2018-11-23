<?php 
session_start();
include("globais.php");
$message = '';
$dir_upload = '../images/';
$max_size = 2000000;
$file = $_FILES['exemplo'];
print_r($_POST);
print_r($_FILES);
//print_r($_SESSION);
$linknovo = $file['name'];
$select = $_POST['carousel'];
$linkurl = $_POST['link'];
@$windows = $_POST['window'];
if(!@$_POST['window']){
	$windows = "_self";
}?>
<br>
<?php
//print_r($_POST);
echo $select[8]."<br>";
echo $select."<br>"; 
echo $linknovo."<br>"; 
echo $linkurl."<br>";
echo $windows;


if(isset($_POST)==1){
	mysql_query("UPDATE `bannerfixoint` SET `id` = '$select[8]', `baner` = '$select', `img` = '$linknovo', `link` = '$linkurl', `ordem` = '$windows' WHERE `bannerfixoint`.`id` = $select[8];");
	}
	
	//"UPDATE `bannerfixoint` SET `id` = '$select[8]', `baner` = '$select', `img` = '$linknovo', `link` = '$linkurl', `ordem` = '$windows' WHERE `bannerfixo`.`id` = $select[8];");

	
if ($file['size'] <= $max_size && $file['size'] > 0) {
	$new_name =$file['name'];
	$copied = copy($file['tmp_name'], $dir_upload . $new_name);

	if ($copied) {
		$message = 'Ok!';
		header( "location: pagina_principal.php" );
	} else {
		$message = 'Erro!';
	}
} else {
	$message = 'Max file size 2mb!';
}

//echo json_encode(array("message" => $message));
			
			header( "location: pagina_principal.php" );
?>
