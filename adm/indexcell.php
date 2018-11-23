<?php
	ob_start(); 
	session_start();
 	include('globais.php');
 ?>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/jquery.mobile.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="shortcut icon" href="favicon.ico" />
 <script src="../js/processing.js"></script>
<link rel="stylesheet" href="../css/all.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.mobile.min.js"></script>

<title>Nix - Web$hop </title>
</head>
<style>
body{
    background: -webkit-canvas(mybackground);
	margin:0px;
  }
  
  </style>
<body style="background-color:rgba(200,200,200,0.09);">
<?php include_once("analyticstracking.php") ?>
		
  
<!-- Primeira página !-->


<div  class="row" style="padding:0" >
<div style="width:auto; text-align:center;height:auto;background-color:<?php echo $corMenu ?>;border-bottom:rgba(218,218,218,0.75) 5px solid;">	
	
    	<img class="img-responsive" src="../images/logonix-ent.png" style="border:0px red dashed;margin:auto;"  alt=""/>
    
</div>

            
<div id="container"  style="border:#000 0px dashed;margin-left:auto;margin-right:auto; padding:30px; ">
	
	<form action="logar.php" method="post" target="_blank" name="form" id="form">
	<div class="col-md-12" style="border:#000 0px dashed;text-align:center">
		<div class="col-md-2 col-xs-2"   style="text-align:left;border:#000 0px dashed;"><label style="font-size:12px;font-family:Verdana, Geneva, sans-serif">Login:</label> </div>
        <div class="col-md-10"><input class="input-lg" name="login" type="text" id="login" size="20" width="120" /></div>
   </div>
    <div class="col-md-4" style="border:#000 0px dashed;text-align:center">
        <div class="col-md-2 col-xs-2"   style="text-align:left;border:#000 0px dashed;"><label style="font-size:12px;font-family:Verdana, Geneva, sans-serif">Senha:</label></div>
        <div class="col-md-10"  style="border:#000 0px dashed;"><input class="input-lg" name="senha" type="password" id="senha" size="20" width="120"/></div>
    </div>
    
         <div class="container">
      <input  class="btn btn-default btn-lg btn-block" type="submit" name="button" id="button" value="Entrada"  style=";margin-top:1px;" />
        </div>
       </form>
    </div>
</div>
            
<div id="nome" style="margin-left:auto;margin-right:auto;width:300px;text-align:center;border:0px #000 solid;padding:20px;"><br><a  class="btn btn-default btn-sm" href="http://www.voxa.com.br/nix" target="_blank" alt="Contato 55 75 91429009 - Sérgio Mota">Voxa Design</a> 
			
</div>
			
      
			
	</div>
  

</body>
</html>