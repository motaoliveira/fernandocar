<?php
	session_start();
	
 	include('globais.php');
 ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/jquery.mobile.min.css">
<link rel="stylesheet" href="../css/all.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.mobile.min.js"></script>

<title><?php echo $tituloPainel ?></title>
</head>

<body>
		 <script>
			$(document).ready(function(){
            
			
			
$( "#popup-menu" ).popup( "open" );

   
			 
 			});
			</script>
  
<!-- Primeira página !-->
<div data-role="page" style="background-image:url(../img/bg.png)">



	<div role="main" class="ui-content" style="padding:0" >

		<div style="width:auto;height:180px;background-color:<?php echo $corTopo; ?>;border-bottom:rgba(218,218,218,1.00) 5px solid;">
			<div style="width:400px;height:180px;margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:0px;position:relative;background-color:rgba(0,0,0,0.15)"><img src="../img/logonix-ent.png" width="400" height="180" style="border:0px;"  alt=""/>
            </div>
        </div>

            <form action="" method="post" target="_top" name="form" id="form">
            
            <div id="nome" style="margin-left:auto;margin-right:auto;width:400px;border:#FFFFFF 0px dashed; padding-top:10px;background-color: rgba(207,207,207,0.55);
            -webkit-border-radius: 0px 0px 20px 20px;-moz-border-radius: 0px 0px 20px 20px;border-radius: 0px 0px 20px 20px
            ">
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
                        <input   type="submit" name="button" id="button" value="ENTRAR"  />
                        </span></td>
                    </tr>
                </table>
            </div>
            
            <div id="nome" style="margin-left:auto;margin-right:auto;width:200px"></div>
            
            <div id="nome" style="margin-left:auto;margin-right:auto;width:200px;padding-left:100px"></div>
            
            </form>
         

            <!-- Primeira página !-->

       
       
       
      

	</div><!-- /content -->
    
      
		<?php
	print_r($_POST);
	//@$dadosSite = $_POST['button'];
	//echo 1;
		
					
				@$loginPost = $_POST['login'];
				@$senhaPost = $_POST['senha'];
				@$id=0;
				//echo $loginPost."<br>";echo $senhaPost;
				
				if ($loginPost=="root" || $senhaPost=="root"){
				
				echo "entrou"
				//header( "location:pagina_principal.php" );
				//include("conect.php");
				//echo "tem post<br>";
				//mysql_select_db("clubedoa_fsa");
				
				$line= "SELECT * FROM usuario WHERE login = '$loginPost' AND senha = '$senhaPost'"
				$sql = mysql_query($line, $link);
				
				//echo $sql;
				//echo mysql_num_rows($sql);
				if(mysql_num_rows($sql) == 1){
					while($usuario = mysql_fetch_array($sql)){
					$_SESSION['login_session'] = $usuario['login'];
					$_SESSION['senha_session'] = $usuario['senha'];
					$_SESSION['nome_session'] = $usuario['nome'];
					$_SESSION['tipo'] = $usuario['tipo'];;
					$_SESSION['id'] = $usuario['id'];;
					}
						header( "location:pagina_principal.php" );
				}
						?>
						
            <?php   }
	
		
?>
</div><!-- /page -->

</body>
</html>