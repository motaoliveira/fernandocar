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
	$extensao = @end(explode('.',$linknovo));
	$nomearquivo = @current(explode('.',$linknovo));
	$novonome = rand().".".$extensao;
	
if($linknovo==""){
	$_SESSION['line1'] = "7";
			header( "location: pagina_principal.php" );
			}else{
	mysql_query("UPDATE `banerlateral` SET `id` = '$select[8]', `banner` = '$select', `img` = '$novonome', `link` = '$linkurl', `ordem` = '$windows' WHERE `banerlateral`.`id` = $select[8];");

if ($file['size'] <= $max_size && $file['size'] > 0) {
	$new_name =$file['name'];
	$copied = copy($file['tmp_name'], $dir_upload . $novonome);

	if ($copied) {
		$message = 'Ok!';
		$_SESSION['line1'] = "7";
		header( "location: pagina_principal.php" );
	} else {
		$message = 'Erro!';
	}
} else {
	$message = 'Max file size 2mb!';
}

			$_SESSION['line1'] = "7";
			header( "location: pagina_principal.php" );
}
			?>
