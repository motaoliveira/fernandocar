<?php
	session_start();
	include('protect.php');
	include("conect.php");
	?><pre><?php print_r ($_POST);?></pre>x
	<pre><?php print_r ($_FILES);?></pre><?php
	$id = $_POST['IdCliente'];
	@mkdir("../aluno/$id/", 0777, true);
	@mkdir("../aluno/$id/doc", 0777, true);
	$dir_upload = "../aluno/$id/doc/";
	$max_size = 2000000;
	$namefile = $_FILES['upload']['name'];
	$extensao = $_FILES['upload']['type'];
	if($extensao =="image/jpeg"){$extensao_final = "jpeg";}
	elseif($extensao =="application/pdf"){$extensao_final = "pdf";}
	elseif($extensao=="text/plain"){$extensao_final = "txt";}
	elseif($extensao=="application/octet-stream"){$extensao_final="docx";}
	elseif($extensao=="image/png"){$extensao_final="png";}
	$tempName = $_FILES['upload']['tmp_name'];
	$Client = $_POST['IdCliente'];
	$nome = $_POST['Nome'];
	$cargo = $_POST['Cargo'];
	//echo $extensao_final;
	//echo $extensao;
	if(isset($namefile) AND isset($nome)){
	//echo "gravou no banco";
	}else{
		echo "não gravou no banco";
	}
if ($_FILES['upload']['size'] <= $max_size && $_FILES['upload']['size'] > 0) {
	$new_name = rand(1111111, 55555555555);
	$copied = copy($_FILES['upload']['tmp_name'], $dir_upload . $new_name.'.'.$extensao_final);
	$nomefiledb = $new_name.'.'.$extensao_final;
	//print($copied);
	$query = "INSERT INTO `alunofile` (`id`, `nome`, `cargo`, `documento`, `view`, `obs`, `cliente`) VALUES (NULL, '$nome', '$cargo', '$nomefiledb', '1', 'obs', '$Client')";
	$grave = mysql_query($query);
	//print_r($grave);
	header( "location: pagina_principal.php" );
if ($copied) {
	$message = 'Ok!';
	} else {
	$message = 'Erro!';
	}
} else {
	$message = 'Max file size 2mb!';
}
	$_SESSION['line1'] = "12";
	header( "location: pagina_principal.php" );
	?>
