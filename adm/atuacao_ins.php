<?php 
session_start();
include("globais.php");


$data = $date[0].$date[1].$date[2].$date[3].$date[4].$date[5].$date[6].$date[7].$date[8].$date[9];
$hora = $date[11].$date[12].$date[13].$date[14].$date[15];
/*
print_r ($_POST);
print_r ($_FILES);
*/
	$selectAtuacao = "SELECT * FROM `atuacao`";
	$queryAtuacao = mysql_query($selectAtuacao);
	
	//$atuacao= mysql_num_rows($queryAtuacao);
	
	while($banco = mysql_fetch_array($queryAtuacao)){
		$atuacaoId = $banco["id"];
		}
		if(!$atuacaoId){$atuacaoId=0;}
$novaPasta = $atuacaoId+1;
mkdir("../atuacao/$novaPasta/", 0777, true);
mkdir("../atuacao/$novaPasta/img", 0777, true);
$dir_upload = "../atuacao/$novaPasta/img/";
$max_size = 2000000;
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$mensage = $_POST['tex'];
$name = $_FILES['exemplo']['name']; 

if(isset($_POST)==1){
	mysql_query("INSERT INTO `atuacao` (`id`, `img`, `titulo`, `descri`, `texto`, `data`, `hora`) VALUES ('$novaPasta', '$name', '$titulo', '$descricao', '$mensage', '$data', '$hora');");

};


if ($_FILES['exemplo']['size'] <= $max_size && $_FILES['exemplo']['size'] > 0) {
	$new_name = $_FILES['exemplo']['name'];
	$copied = copy($_FILES['exemplo']['tmp_name'], $dir_upload . $new_name);
	header( "location: pagina_principal.php" );
	if ($copied) {
		$message = 'Ok!';
		

	} else {
		$message = 'Erro!';
	}
} else {
	$message = 'Max file size 2mb!';
}

$_SESSION['line1'] = "8";
header( "location: pagina_principal.php" );


?>
