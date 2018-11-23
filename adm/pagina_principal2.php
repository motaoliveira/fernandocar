<?php
	session_start();
	//include('protect.php');
	include('globais.php');
 ?>
<html>
<head>
<title>Administrativo do Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>








<style>
#config{
	background-color:grey;
}
#menu{
	background-color:grey;
	margin-top:1px;	
}
#baner{
	background-color:grey;
	margin-top:1px;	
}
li{
list-style-type:none;
}
body{
margin-top:0;
margin-botton:0;
}
</style>

</head>

<body style="background-image:url(../img/bg.png);" data-pinterest-extension-installed="cr1.39.1">﻿
         <script>
		 
			jQuery(document).ready(function(){
				var conteudo = jQuery('#conteudoAdm'); //div Conteudo
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


			});	
	</script>

<div class="jumbotron" style="border-bottom:5px solid rgba(216,211,211,0.90);margin-top:-20px;background-color:grey;padding:0px;">

<div class="row">
	
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto;padding:0px">
    
   <img style="" src="../img/logonix.png" alt=""> </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto">2</div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:0px rgba(120,120,120,1.00) solid;height:120px;margin-left:auto;margin-right:auto">2</div>
    

</div>

</div>

<div class="container" style="border:0px #000000 dashed;margin-top:-20px;">
<div class="row">
	<div class="col-md-3">


        <div class="btn btn-block" id="config">Configurações</div>

        <div id="cofigRoler" style="margin-top: 1px; display: block;">
	
            <a class="btn btn-block btn-default" id="configCor" style="margin-top:1px;">Cores</a>
            <a class="btn btn-block btn-default" id="configLogo">Logos</a>
           <a class="btn btn-block btn-default" id="configBg">Background</a>
            <a class="btn btn-block btn-default" id="configTitulo">Titulo / Rodapé</a>
           
		</div>
        

        <div class="btn btn-block" id="menu">Menu</div>

        <div id="menuRoler" style="display: none;">
	
            <a class="btn btn-block btn-default" href="#" id="configCor">inserir</a>
            <a class="btn btn-block btn-default" href="#" id="configLogo">editar</a>
            <a class="btn btn-block btn-default" href="#" id="configBg">cores</a>
        </div>


        <div class="btn btn-block" id="baner">Banners</div>

        <div id="banerRoler" style="display: none;">
            <a class="btn btn-block btn-default" href="#" id="confir">inserir</a>
            <a class="btn btn-block btn-default" href="#" id="configLogo">editar</a>
            <a class="btn btn-block btn-default" href="#" id="configBg">cores</a>
        </div>

	</div>
	<div class="col-md-9" id="conteudoAdm" style="background-color:rgba(8,8,8,0.2);">


<meta charset="utf-8">
<title></title>



﻿<script>
$(document).ready(function(){
    $("#insCor").click(function(){
		var novaCor = $('#novaCor').val();		
		$.post("insCor.php", { novaCor:novaCor },function(get_retorno) {
		  alert(get_retorno);
		    });
    });


    $("#baseCor").click(function(){
		var novaBaseCor = $('#novaBaseCor').val();		
		$.post("insBaseCor.php", { novaBaseCor:novaBaseCor },function(get_retorno) {
		  alert(get_retorno);
		    });
    });
	


	  });
</script>

<div class="row">

	<div class="col-md12" style="margin-top:-20px;background-color:rgba(225,225,225,0.60);padding:10px;"><h3> Configuração cor do <strong>topo</strong></h3></div>
	<div class="row">
	<div class="col-md-6"><label style="margin-left:10px">Insira nova cor para o seu Topo</label></div>	
	<div class="col-md-4"><input type="text" id="novaCor" placeholder="grey"></div>
	<div class="col-md-2">4</div>
	
	</div>
</div>

<!--
<p > Configuração cor do <strong>topo</strong></p>

<hr style="margin-top:-20px">
  <div style="width:auto;height:23px;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(251,251,251,0.75);padding:10px">
<div style="float:left"><p style="margin-top:5px">Cor atual do <strong style="font-size:20px">topo</strong></p></div>
<div style="margin-right:0px;width:23px;height:23px;border:rgba(0,0,0,.50) 1px dotted;float:right;background-color:grey"></div>

</div>


  <div style="width:auto;height:65px;border:rgba(0,0,0,.00) 1px dashed;background-color:rgba(251,251,251,0.75);padding:10px;margin-top:2px;">
<div style="float:left"><p style="margin-top:5px;border:rgba(0,0,0,.00) 1px dashed;">Insira nova cor para o <strong style="font-size:20px">topo</strong></p></div>
<div style="margin-right:0px;width:auto;height:auto;border:rgba(0,0,0,.50) 0px dotted;float:right;">
<form action="" method="POST" name="consulta" >
    
      <span><input type="text" id="novaCor" style="display:inline;border:rgba(0,0,0,.50) 0px dotted;margin-top:0px;padding:20px" placeholder="grey"> </span>
      <span style="margin-left:10px"><input type="submit" value="Aplicar"  class="ui-btn" id="insCor" style="float:right;display:flex;border:rgba(0,0,0,.50) 0px dotted;"></span>

</form>
</div>

</div>

<hr>
<p style="margin-top:0px"> Configuração cor da <strong style="font-size:20px">base</strong></p>

<hr style="margin-top:-20px">

  <div style="width:auto;height:23px;border:rgba(0,0,0,.00) 1px dashed;background-color:rgba(251,251,251,0.75);padding:10px">
<div style="float:left"><p style="margin-top:5px">Cor atual da <strong style="font-size:20px">base</strong></p></div>
<div style="margin-right:0px;width:23px;height:23px;border:rgba(0,0,0,.50) 1px dotted;float:right;background-color:grey"></div>

</div>

  <div style="width:auto;height:65px;border:rgba(0,0,0,.00) 1px dashed;background-color:rgba(251,251,251,0.75);padding:10px;margin-top:2px;">
<div style="float:left;border:rgba(0,0,0,.00) 1px dashed;"><p style="margin-top:5px;float:left;">Insira nova cor para a <strong style="font-size:20px">base</strong></p></div>
<div style="margin-right:0px;width:auto;height:auto;border:rgba(0,0,0,.00) 0px dotted;float:right;">
<form action="" method="POST" name="consulta" >
    
      <span><input type="text" id="novaBaseCor" style="display:inline;border:rgba(0,0,0,.50) 0px dotted;margin-top:0px;padding:20px" placeholder="grey"> </span>
      <span style="margin-left:10px"><input type="submit" value="Aplicar" class="ui-btn" id="baseCor" style="float:right;display:flex;border:rgba(0,0,0,.50) 0px dotted;"></span>

</form>
</div>

</div>
<hr>
!-->


</div>
</div>
</div>









<!--
<style>
hr {
  height: 0;
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	color: rgba(0,0,0,1);
}
a:visited {
	color: rgba(0,0,0,1);
}
a:hover {
	color: rgba(0,0,0,1);
}
a:active {
	color: rgba(0,0,0,1);
}
.ui-btn-i:hover{
background-color:rgba(190,190,199,0.85);	
	
}
.config{
	background-color:grey;
}


</style>
<title>Administrativo do Site</title>
</head>

<body>
         <script>
		 
			jQuery(document).ready(function(){

				var conteudo = jQuery('#contentAdm'); //div Conteudo
				
				// Opções Menu 
				jQuery('#menuIns').click(function(){
					conteudo.load('menuins.php');					
					});
				jQuery('#menuEdt').click(function(){
					conteudo.load('menuedt.php');					
					});
				jQuery('#menuDelete').click(function(){
					conteudo.load('menudelete.php');					
					});

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

				 // Opções Categoria 
				jQuery('#cateIns').click(function(){
					conteudo.load('cateins.php');					
					});
					
				 // Opções Linha de Produto 
				jQuery('#linhaIns').click(function(){
					conteudo.load('linhaIns.php');					
					});
					
				 // Opções de Produto 
				jQuery("#prodIns-").click(function(){
					 conteudo.load('#popup');		
 					});
////////////////////////////////////////////////////////////

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


////////////////////////////////////////////////////////////
$("#speech").bind("webkitspeechchange", function (e) {
     var val = $(this).val();
 
// Did the user say Delete? Then clear the canvas.
     if(val == "qual meu nome") {
       $(".answer").text("Ramayan Amaral Mota");
       return;
     }
 			});
			
			});
			</script>
<div style="background-image:url(../img/bg.png);padding:0;margin-top:-20px;">
    <div role="main" class="ui-content" style="margin-top:0px;padding:0px " >
   
    
        <div style="max-width:auto;height:120px;background-color:grey;border-bottom:rgba(218,218,218,1.00) 5px solid;margin-top:0px;">
         <div style="max-width:1000px;min-width:400px;height:auto;border:0px rgba(158,158,158,1.00) dashed;margin-left:auto;margin-right:auto;">
        <img src="../img/logonix.png" width="" height="120" alt=""/> </div>

        
        </div>

<div style="margin-left:auto;margin-right:auto;width:1000px;background-color:rgba(255,255,255,0.26);margin-top:0px;padding:0px;border:dashed 0px #C4BCBC;  position: relative;height:auto; display:block">	

        <div id="menulateral" style="width:220px;height:auto;background-color:rgba(0,0,0,0.05);display:left;align-self:flex-start; float:left;right:0px;padding:3px;margin-top:2px;" >
       
       

          
 
 
 </div>
 
 
 <div id="contentAdm" style="width: 730px; height: auto; background-color:rgba(221,221,221,0.30); align-self: flex-start; float: right; background-image:;display:block;padding:20px;margin-top:2px;display:inline-block;" data-role="controlgroup">
    
   <p>
   Array
(
)
Array
(
    [sessiontime] => 1443809756
    [login_session] => root
    [senha_session] => root
    [nome_session] => Criador do Site
    [tipo] => 1
    [id] => 1
)
grey   </p>
  
   <input type="text" name="busca"   x-webkit-speech >

</div>
 </div>
  
          </div>
          
          
          <div style="width:auto;height:165px;background-color:grey;bottom:0px;position:relative;margin-bottom:0px"></div>
        
        
        
        </div>

!-->
	

<span style="height: 20px; width: 40px; position: absolute; opacity: 1; z-index: 8675309; display: none; cursor: pointer; border: none; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAAoCAYAAABpYH0BAAAHjElEQVR4Ae1bBXAbvRLO0GNmpv+VmflnZmZmZi4zMzMzM4Y58ZwTz4SZnZzpjLWzBa38Zs8aO332pdy7ma9JPmml1XfSaqXacfgYjRIcPrwP9u7dqSMKHDq0D5hmiLi4vDwJEH6/H86dOxcFdAQCfq5ZQUEexOHM8/l8cPbsWR0xADVD7eJwSuqCaANqpwt4MQTU9uiPLuDFErC1tVUDdFw0AV0l5VA1dS4Y7n4SUv7VD+J/0QHif3YT/1168Dmonb8MfBbr9StgIBDQBE9DE+Q//zYX69QP/3NBJP6pO1TPXgwBvx9trwu0S0BblgFSOwwigRJ+1xnyn3wVqqfNh6aVG6Fu7mIofudzSL1poCCk6aX3wO/1XV8C4ikkFjgKSiD5b71IlIIX3oHTbDayR5ji/GEdVU+dK8zS0m8mYDvXPLQJyDLw7CH3khjlTAx8LmSDYtbOXEg28b/sAPb8Qir3ebxg3ncY5MTUiz5Ir80BTTv2UX+R4KyownraBcRjSbRo3LaHhDDc8Ri0BgKcd5lboOTL0ZDPZqOclBpmh/XSuwwj2+IPv+a81+2B3DsfI75+/VbkLwpczTKkdx+B7fKNzSblCeVl42dA8j/78PLaZWtjbl+TgManXqPBWk4mBXmvF7KH3U98CnOKCRNmW/zul1QnvdfNnDMfPkEcomzklIsmYOWMBULbTdv3Ik8+J/+9N5UpRSXaBfR6vVEj5d99sUMeA/3/4xp3H0ROgFJbF2ZbMW66uun8thPnbAaJ4mMKG5CztAL5i4LGDduov6w+t4FPUahMzjJQWep/B6EgMbdPAno8nqhx6sfBTrMH3k1c6feTwlIW1kGYbdk3E9U4+PMOyPF69uQMqF+8Gk43y2R3MYBxSt5zCJpWb4ZWl1AmzM6CF9/V0r42AZP/3CP4RgfcRVzozEIYH3kxom3Bqx+qb/3f/ThXtXAlSI+9xPAytJxIpLp2FtilJ14F6dGXoPCT78AqmcDI4mtqx8Ec+S+/D0pdwwV9Lfl6QrDtJ14BW1Ep5/JZGpVz+6NsJfUnX9I6D+WcxMKTJgHdbnfUyBn+QHAJ/rojOOobOGfef0QQsHbBioi2Wf3vFDYgxqHzxDEBqW7l3MWq2DcNYEu+c1iYMDz0XJt+Kk1mnOU0251sk7MyEck+AnKDPkULbQJWz1LTEdNbn3FOzsolDpe4s7I6zM5aXAanfqrmgpVs1lpNheqy/2M38DjV+sYnXxUHd/ODUP7VeBbLbicOd9a2/KzbskuwRc7O/Cr7gmUKT71OZXjcLPt8JIclMUWbgE6nM2p4HQ4ekPlO2n045yoox2Nct+HYeJid6d0vQuLff3nuVTl/GXHSwy+o9RVFSNSL3vqMck1bcoa6Ef2+c5t+Fryj9lf+7STOoV/YRtWUuVRW+PrHyCFwWcakBQmoKEpM8LHlYHrmDXSM/y09qaY2mBo4mmWhfgNb4vE/+68QtNEBSZ1lbGYvovpNKapIyX/thUkuldWG7KzZg+9p08eMPreGhgahzHDvU2reuW4LcpqgWUAcfCCYQOPfbBn0FWMTu4FpZstaLiyCEpasJvymkxrP/jOAX0IoDgfmi8RbDRK1XzZ5NvGm594W+i54T51ZpZ+PiuifpbwCQwmd0d0O9QU4rFZI/EMXCjeYbrVbQIfDoRnNBkm4UMD8LkKApnzLXVwanGWpmULizV4KtRk6Q+qWrRX6ywiGDw7zgWMRfapavl59mXc/IZQ1HDlJZRhP0RetY78oAlYuWK7GMTZw64nE0CMbxaoSFgNPt8gkVPm0+VRufPwVag9nT8KvO1CZrbhMLauqoY0Iz9NOiyWiT/mvfED2FSOnCGWYCtFxkvmEXLsFtNvtmmF87i11Z500BwXCKxlQciSQ9x0BR1oWtHr4sQ47JTvp6deF2xniX3qPePYiBJvaXQeoLKPXzW36lNlX3anrWMwkexaLQzOBavbyeRl7EebMnJjHTgJarVbNSOs0hBySU7OQQ1CsxJ+R7LIG3k12Eku8G1nMzHv9I+IQhW98LNhUhOSGiSyhrz8eDzVMVF6uAlMiqpfDLipq2Xm7YulqtBETfnYZ3HAqCQwsiY9ns95skGIae7sFtDQ20hvFkwVuDNHaSvc/g3YC8EysxlC+Qwo2dZt2Ih+G8oUrhXrGR1+KWA83Ddq4RODlL852bQJaLBZNMEt56i0KW4ax2MrH4zE2CsvVcugEJP6e75Bs5+4ItqoawUaxWjEpFs7TRW9+CoosC/W8DCUffsN2224hu39/MG/cCbb4FDyrE48XGHhXiSEm1vG3W8Bmo4kuD5Sa2phscWkHZAvfdFySCeMmcvgf1vj5E/yJbznMLoCpU7YB7EyIQIscceBoh5cSGHudBiO4C0rwZpxCSiuDkmXAfpHHBBvttAsoy7I2VFUHA/WC5dhgrPZoQ5tEDHZYH+3+b59YjnVR0Eg89asR2gVUHaFTBfHXPy6egAhcQtrtdQERuoAtLS06NEAX8GIJaDabdWgAFxA/ptrQUBejsQ7UDLXjHzLPzExjREOUxjpQK9SsoMAIcewf/jWHQ4e0fM1B/5rDebD10oZZukwlAAAAAElFTkSuQmCC); background-color: transparent; background-size: 40px 20px;"></span></body></html>