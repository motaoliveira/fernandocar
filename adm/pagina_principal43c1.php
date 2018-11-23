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
.breadcrumb{
background-color:rgba(255,255,255,0.75);
border:1px solid #CCC;	
	
}
#hom{
	background-color:rgba(190,190,190,.75);
	
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
				jQuery('#configLogos').click(function(){
					conteudo.load('logoins.php');					
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

<div class="jumbotron" style="border-bottom:4px solid rgba(216,211,211,0.90);margin-top:-20px;background-color:<?php echo $corTopo; ?>;padding:0px;">

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

			<button class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapseconfig" aria-expanded="true" aria-controls="collapseconfig">
			  Configurações
			</button>
			<div class="collapse" id="collapseconfig">
							<a class="btn btn-block btn-default" id="configCor" style="margin-top:5px;">Cores</a>
							<a class="btn btn-block btn-default" id="configLogos">Logos</a>
							<a class="btn btn-block btn-default" id="configBg">Background</a>
							<a class="btn btn-block btn-default" id="configTitulo">Titulo / Rodapé</a>
			</div>

			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false" aria-controls="collapsemenu">
			  Menu
			</button>
			<div class="collapse" id="collapsemenu">
							<a class="btn btn-block btn-default" id="menuCategoria" style="margin-top:5px;">Categoria</a>
							<a class="btn btn-block btn-default" id="menuFamilia">Família</a>
							<a class="btn btn-block btn-default" id="menuProd">Produto</a>
			</div>
						
			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsebaner" aria-expanded="false" aria-controls="collapsebaner">
			  Banners
			</button>
			<div class="collapse" id="collapsebaner">
							<a class="btn btn-block btn-default" id="menuCategoria" style="margin-top:5px;">Categoria</a>
							<a class="btn btn-block btn-default" id="menuFamilia">Família</a>
							<a class="btn btn-block btn-default" id="menuProd">Produto</a>
			</div>
					
			
			

			
			


			

		</div>
		<div class="col-md-9" id="conteudoAdm" style="background-color:rgba(233,233,233,0.1);border:0px dashed rgba(0,0,0,0.05);padding:2px">
	</div>
	</div>
</div>

<div style="border-top:2px solid <?php echo $corTopo ?>;width:auto;height:142px;background-color:<?php echo $corBase ?>;bottom:0px;position:relative;margin-bottom:0px
			margin:0 auto;margin-left:auto;margin-right:auto;align:center;text-align:center;">
	<div style="border:1px #000 DASHED;margin-top:18px;">
		<a  class="btn btn-default btn-xs" href="#">one</a>
		<a  class="btn btn-default btn-xs" href="#">dois</a>
		<a  class="btn btn-default btn-xs" href="#">tres</a>
		<a  class="btn btn-default btn-xs" href="#">quatro</a>
		
	</div>
</div>
        
	
</body></html>