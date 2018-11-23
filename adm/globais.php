<?php
	@include('conect.php');

	$dep = '';
	$corBase = "";
	$sql = mysql_query("SELECT * FROM `configurar`");

	if(mysql_num_rows($sql) == 1){
		while($configurar = mysql_fetch_array($sql)){
		$corTopo = $configurar['corTopo'];
		$corMenu = $configurar['corMenu'];
		$corBase = $configurar['corBase'];
		$logoTopo = $configurar['logoTopo'];
		$corMenuAdm = $configurar['tipoMenuLat'];
		$corPainel = $configurar['corPainel'];
		$logoPe = $configurar['logoPe'];
		$imgBg = $configurar['imgBg'];
		$tituloSite = $configurar['configTitulo'];
		$textRodape = $configurar['configRodape'];

	//echo $configurar['corTopo'];

		//echo $corTopo;
		}

	}


	$tituloPainel = "Administrativo do Site";
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('d-m-Y H:i');


?>
