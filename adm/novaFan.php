<?php
	session_start();

	//include('protect.php');

	//include('conect.php');
	include('globais.php');
	print_r($_POST);
	$novaFan = $_POST['novaFan'];
	$sell = $_POST['sell'];
	
	$sell = trim($sell);
	$novaFan = trim($novaFan);
	
	
	$sql = "INSERT INTO `clubedoa_fsa`.`subcate` (`id`, `categoria`, `tipoSub`, `linkimgsub`) VALUES (NULL, '$sell', '$novaFan', 'produto-sem-imagem.gif');";//"UPDATE 'loja'.'configurar' SET 'configTitulo' = '$novo' WHERE 'configurar'.'id' = 1;";
		mysql_query($sql);
		
	$select="SELECT * FROM `subcate` WHERE `categoria` LIKE '$sell' AND `tipoSub` LIKE '$novaFan'";
			
	
	$sqlConsult2 = mysql_query($select);
	
	// echo $c;
	// echo $f;
	
	while($confProd = mysql_fetch_array($sqlConsult2)){
		$catdb = $confProd['categoria'];
		$fandb = $confProd['id'];
		}

	$sql2 = "INSERT INTO `clubedoa_fsa`.`prodconfig` (`id`, `prodCat`, `prodSub`, `prodNome`, `prodPrice`, `prodImage0`, `prodImage1`, `prodImage2`, `prodImage3`, `prodDescri`, `prodEspecifi`, `prodJuros`, `prodLarg`, `prodAlt`, `prodProf`, `prodPriceAnt`, `prodPriceDiv`, `prodEcono`, `prodDivi`, `prodFabri`, `prodCod`, `prodAvalia`, `prodDestaque`, `prodLancamento`, `prodNovid`, `prodPromo`, `prodView`, `prodComp`) VALUES (NULL, '$catdb' , '$fandb', '1', '0', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');";
	
		mysql_query($sql2);

	echo "Nova Família de produtos adicionada com sucesso!";
	
	
 ?>
