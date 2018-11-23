<?php
	include('protect.php');
	include('conect.php');

	$nome = $_POST["nome"];
	$celular = $_POST["celular"];
	$endereco = $_POST["rua"];
	$numero = $_POST["numero"];
	$bairro = $_POST["bairro"];
	$cep = $_POST["cep"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$email = $_POST["login"];
	$senha = $_POST["senha"];
	$query ='';

	if($nome || $celular || $endereco || $numero || $bairro || $cep || $cidade || $estado || $email || $senha){

	$queryLine = "INSERT INTO `aluno` (`id`, `nome`, `email`, `celular`, `login`, `senha`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `log`, `but`, `mail`) VALUES (NULL, '$nome', '$email', '$celular', 'login', '$senha', '$endereco', '$numero', '$bairro', '$cep', '$cidade', '$estado', '', 'avatar.jpg', '0')";
	$query = mysql_query($queryLine);

	//$select = select max(campo_id) from tabela;
	$pasta = mysql_query ("select id FROM aluno ORDER BY id DESC LIMIT 1");
	while ($banco = mysql_fetch_assoc($pasta)){ $pastaid = $banco['id']; }
	$estrutura = "../aluno/$pastaid";
	mkdir($estrutura);

	$newdir = "../aluno/$pastaid/img/";
	mkdir($newdir);
	$file = "../images/avatar.jpg";
	$newfile = "../aluno/$pastaid/img/avatar.jpg";
	copy($file, $newfile); }

	if($query){
		echo "Aluno inserido";
	}else{
		echo "Aluno não inserido";
	}

?>
