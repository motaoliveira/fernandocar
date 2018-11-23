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
}
?>
<br>
<?php
//print_r($_POST);
/*echo $select[5]."<br>"; 
echo $linknovo."<br>"; 
echo $linkurl."<br>";
echo $windows."<br>";*/

if(isset($_POST)==1){
	mysql_query("UPDATE `bannerfixo` SET `id` = '0', `baner` = '$select', `img` = '$linknovo', `link` = '$linkurl', `ordem` = '$windows' WHERE `bannerfixo`.`id` = '0';");
					};

echo $_FILES['exemplo']['size']."<br>";
echo $_FILES['exemplo']['name']."<br>";
echo $_FILES['exemplo']['tmp_name']."<br>";


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
