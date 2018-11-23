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

 <script src="../js/processing.js"></script>
<link rel="stylesheet" href="../css/all.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.mobile.min.js"></script>

<title>Nix - Web$hop </title>
</head>
<style>
body{
    background: -webkit-canvas(mybackground);
  }
  
  </style>
<body>
		
  
<!-- Primeira página !-->
<div data-role="page" style="background-image:url(../img/bg.png)">	

	<div role="main" class="ui-content" style="padding:0" >
	<div style="width:auto;height:180px;background-color:<?php echo $corMenu ?>;border-bottom:rgba(218,218,218,0.75) 5px solid;">
			
			<div style="width:400px;height:180px;margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:0px;position:relative;background-color:rgba(20,20,20,.09)"><img src="../img/logonix-ent.png" width="400" height="180" style="border:0px;"  alt=""/>
            </div>
        </div>

            <form action="logar.php" method="post" target="_top" name="form" id="form">
            
            <div id="nome"  style="margin-left:auto;margin-right:auto;width:400px;border:#FFFFFF 0px dashed; padding-top:10px;background-color: rgba(200,200,200,0.09); ">
                <table width="340" border="0" align="center">
                    <tr>
                        <td><label style="font-size:12px;font-family:Verdana, Geneva, sans-serif">Login:</label>        </td>
                        <td><input name="login" type="text" id="login" size="20" width="120" /></td>
                    </tr>
                    <tr>
                        <td><label style="font-size:12px;font-family:Verdana, Geneva, sans-serif">Senha:</label></td>
                        <td><input name="senha" type="password" id="senha" size="20" width="120"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><span  style="width:200px;padding-left:100px;">
                        <input  class="btn btn-default" type="submit" name="button" id="button" value="ENTRAR"  />
                        </span></td>
                    </tr>
                </table>
            </div>
            
            <div id="nome" style="margin-left:auto;margin-right:auto;width:300px;text-align:center;border:0px #000 solid;padding:20px;"><br><a  class="btn btn-default btn-sm" href="http://www.voxa.com.br/nix" target="_blank" alt="Contato 55 75 91429009 - Sérgio Mota">Voxa Design</a> <?php // print_r($_SESSION); ?><br>
			
			</div>
			
            </form>
			
	</div>
  
</div>

</body>
</html>