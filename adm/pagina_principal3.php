<?php
	session_start();
	//include('protect.php');
	include('globais.php');
 ?>
<html>
<head>
<title><?php echo $tituloPainel ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/colorpicker.css">
<script src="../js/colorpicker.js"></script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>








<style>
#config{
	background-color:<?php echo $corTopo; ?>;
	border:1px solid #CCC;
}
#menu{
	background-color:<?php echo $corTopo; ?>;
	margin-top:1px;	
	border:1px solid #CCC;
}
#baner{
	background-color:<?php echo $corTopo; ?>;
	margin-top:1px;	
	border:1px solid #CCC;
}
li{
list-style-type:none;
}
body{
margin-top:0;
margin-botton:0;
margin-left:0;
margin-right:0;
overflow-x: hidden;
}
.jumbotron{
	width:auto;
	
}
</style>

</head>

<body style="background-image:url(../img/bg.png);" >﻿
         <script>
		 
			jQuery(document).ready(function(){
				var conteudo = jQuery('#conteudoAdm'); //div Conteudo
				conteudo.load('inicial.php');
						 // Opções Configurações 
				jQuery('#configCor').click(function(){
					conteudo.load('configcor.php');					
					});
				jQuery('#configLogo').click(function(){
					conteudo.load('configlogo.php');					
					});
				jQuery('#configBg').click(function(){
					conteudo.load('configbg.php');					
					});
				jQuery('#configTitulo').click(function(){
					conteudo.load('configtitulo.php');					
					});


			//Menu
				jQuery("#config").click(function(){
					     	$("#cofigRoler").slideToggle();    
	
 					});
					
				jQuery("#menu").click(function(){
					     	$("#menuRoler").slideToggle();    
	
 					});
				jQuery("#baner").click(function(){
					     	$("#banerRoler").slideToggle();    
	
 					});
			
			
			//buttons
			

			});	
	</script>

<div class="jumbotron" style="border-bottom:5px solid rgba(216,211,211,0.90);margin-top:-20px;background-color:<?php echo $corTopo; ?>;padding:0px;">

<div class="row">
	
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto;padding:0px">
    
   <img style="" src="../img/logonix.png" alt=""> </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto"></div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto"></div>
    

</div>

</div>

<div class="container" style="border:0px #000000 dashed;margin-top:-20px;">
	<div class="row">
		<div class="col-md-3">

			<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseconfig" aria-expanded="true" aria-controls="collapseconfig">
			  Configurações
			</button>
			<div class="collapse" id="collapseconfig">
							<a class="btn btn-block btn-default" id="configCor" style="margin-top:1px;">Cores</a>
							<a class="btn btn-block btn-default" id="configLogo">Logos</a>
							<a class="btn btn-block btn-default" id="configBg">Background</a>
							<a class="btn btn-block btn-default" id="configTitulo">Titulo / Rodapé</a>
			</div>

			<button style="margin-top:1px;" class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false" aria-controls="collapseExample">
			  Menu
			</button>
			<div class="collapse" id="collapsemenu">
							<a class="btn btn-block btn-default" id="menuCategoria" style="margin-top:1px;">Categoria</a>
							<a class="btn btn-block btn-default" id="menuFamilia">Família</a>
							<a class="btn btn-block btn-default" id="menuProd">Produto</a>
			</div>
						

			
			

			
			


			<div class="btn btn-block" id="baner">Banners</div>

			<div id="banerRoler" style="display: none;">
				<a class="btn btn-block btn-default" href="#" style="margin-top:1px;" id="confir">inserir</a>
				<a class="btn btn-block btn-default" href="#" id="configLogo">editar</a>
				<a class="btn btn-block btn-default" href="#" id="configBg">cores</a>
			</div>

		</div>
		<div class="col-md-9" id="conteudoAdm" style="background-color:rgba(233,233,233,0.1);border:0px dashed rgba(0,0,0,0.05);padding:2px">
	</div>
	</div>
</div>

<div style="border-top:5px solid rgba(216,211,211,0.90);width:auto;height:105px;background-color:<?php echo $corBase ?>;bottom:0px;position:relative;margin-bottom:0px"></div>
        
	
</body></html>