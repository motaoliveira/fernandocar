<?php
	session_start();
	//include('protect.php');
	include('conect.php');
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
	background-color:rgba(255,255,255,.40);
	border:1px rgba(200,200,200,1) solid;
}
.btn-secundary{
	border:1px rgba(200,200,200,1) solid;
}
body{
	background-image:url(../img/<?php echo $imgBg ?>);
}
a{
	color:grey;	
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
</head>
<body>﻿
         <script> 
			jQuery(document).ready(function(){
				var conteudo = jQuery('#conteudoAdm'); //div Conteudo
				conteudo.load('inicial.php');

				jQuery('#init').click(function(){
					conteudo.load('inicial.php');					
					});
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
			//Loja
				jQuery('#categoria').click(function(){
					conteudo.load('lojacategoria.php');					
					});
				jQuery('#familia').click(function(){
					conteudo.load('lojafamilia.php');					
					});
				jQuery('#produtos').click(function(){
					conteudo.load('lojaprodutos.php');					
					});
			//Menu
				
				jQuery("#menu").click(function(){
					     	$("#menuRoler").slideToggle();    
 					});
				jQuery("#baner").click(function(){
					     	$("#banerRoler").slideToggle();    
 					});
			//buttons
			
			//DATA-TOOGLE TOOTIP
			
  
			});	
	</script>

<div class="jumbotron" style="border-bottom:4px solid rgba(216,211,211,0.90);margin-top:-20px;background-color:<?php echo $corTopo; ?>;padding:0px;">

<div class="row">
	
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto;padding:0px">
		<img style="" src="../img/logonix.png"  alt=""> </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto"></div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto"></div>
    

</div>

</div>

<div class="container" style="border:0px #000000 dashed;margin-top:-20px;">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<button class="btn btn-<?php echo $corMenuAdm; ?> btn-block" id="init" >
			  Principal
			</button>
			<button class="btn btn-<?php echo $corMenuAdm; ?> btn-block" id="" type="button" data-toggle="collapse" data-target="#collapseconfig" aria-expanded="true" aria-controls="collapseconfig" >
			  Configurações
			</button>
			<div class="collapse" id="collapseconfig">
							<a class="btn btn-block btn-default" id="configCor" style="margin-top:5px;"   title="Cores do Topo / Rodapé / Menu">Cores</a>
							<a class="btn btn-block btn-default" id="configLogos" title="Logo do Topo / Rodapé"> Logos</a>
							<a class="btn btn-block btn-default" id="configBg" title="Modifique cor / imagem">Background</a>
							<a class="btn btn-block btn-default" id="configTitulo" title="Título do site / Texto do Rodapé">Titulo / Rodapé</a>
			</div>

			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false" aria-controls="collapsemenu">
			  Loja 
			</button>
			<div class="collapse" id="collapsemenu">
							<a class="btn btn-block btn-default" id="categoria" style="margin-top:5px;">Departamentos</a>
							<a class="btn btn-block btn-default" id="familia">Famílias</a>
							<a class="btn btn-block btn-default" id="produtos">Produtos</a>
			</div>
						
			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsebaner" aria-expanded="false" aria-controls="collapsebaner">
			  Banners
			</button>
			<div class="collapse" id="collapsebaner">
							<a class="btn btn-block btn-default" id="menuCategoria" style="margin-top:5px;">Principal</a>
							<a class="btn btn-block btn-default" id="menuFamilia">Fixo</a>
							<a class="btn btn-block btn-default" id="menuProd">Lateral</a>
			</div>
			
			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapseprodutos" aria-expanded="false" aria-controls="collapseprodutos">
			  Produtos
			</button>
			<div class="collapse" id="collapseprodutos">
							<a class="btn btn-block btn-default" id="menuCategoria" style="margin-top:5px;">Categoria</a>
							<a class="btn btn-block btn-default" id="menuFamilia">Família</a>
							<a class="btn btn-block btn-default" id="menuProd">Produto</a>
			</div>
			
			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapseclientes" aria-expanded="false" aria-controls="collapseclientes">
			  Clientes
			</button>
			<div class="collapse" id="collapseclientes">
							<a class="btn btn-block btn-default" id="menuCategoria" style="margin-top:5px;">Inserir</a>
							<a class="btn btn-block btn-default" id="menuFamilia">Editar</a>
							<a class="btn btn-block btn-default" id="menuProd">Buscar</a>
			</div>

		</div>
	
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="conteudoAdm" style="background-color:rgba(233,233,233,0.1);border:0px dashed rgba(0,0,0,0.05);padding:2px">
		</div>
	</div>	
</div>
<div style="width:auto;height:10px;border:0px #000 dashed"></div>
<footer style="border-top:2px solid <?php echo $corTopo ?>;width:auto;height:100px;background-color:<?php echo $corBase ?>;padding-top:20px;">
	
	<div class="container" style="border:0px #000000 dashed;margin-top:0px;">
		<div style="border:0px #000 DASHED;margin-top:5px;float:right;text-align:right;">
			Desenvolvido por <a  class="btn btn-default btn-xs" href="#">mouseover</a><br>
			Contato 55 75 91429009 - Sérgio Mota
		</div>
	</div>
</footer>



</body></html>