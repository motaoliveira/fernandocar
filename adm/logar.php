<?php
include "conect.php";
ob_start();
@session_start();

print_r($_POST);

@$login = $_POST['inputEmail'];
@$senha = $_POST['inputPassword'];
@$id=0;

		@$dadosSite = $_POST['button'];

		// echo $dadosSite;
		if($dadosSite=="ENTRAR"){
				echo "usuario quer entrar";
				@$loginPost = $_POST['inputEmail'];
				@$senhaPost = $_POST['inputPassword'];

				//echo "<br>".$loginPost."<br>";echo $senhaPost."<br>";
				include('conect.php');

				$line= "SELECT * FROM `usuario` WHERE `login` = '$loginPost' AND `senha` = '$senhaPost'";

				$buscaUsuario = mysql_query($line);

				if(mysql_num_rows($buscaUsuario) == 1){
					while($usuario = mysql_fetch_array($buscaUsuario)){
					$_SESSION['login_session'] = $usuario['login'];
					$_SESSION['senha_session'] = $usuario['senha'];
					$_SESSION['nome_session'] = $usuario['nome'];
					$_SESSION['tipo'] = $usuario['tipo'];;
					$_SESSION['id'] = $usuario['id'];;
					}

				//print_r($_SESSION);
				header( "location: pagina_principal.php" );
				}

		}

?>


<?php



/*

echo $login.'<br>';
echo $senha.'<br>';

$sql = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'");

if(mysql_num_rows($sql) == 1){

	$_SESSION['login_session'] = $login;
	$_SESSION['senha_session'] = $senha;
	$_SESSION['id'] = $id;
	$_SESSION['cat'] = "c";
	$_SESSION['sub'] = "s";
	$_SESSION['pro'] = "p";

		header( "location: pagina_principal.php" );

}else{
	?>
    <!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/jquery.mobile.min.css">
<link rel="stylesheet" href="../css/all.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.mobile.min.js"></script>

<title>NIX - WEBSHOP</title>
</head>
<body>
  <?php

if(!$dado){
echo "não conectado!";
}else{
	echo "Conectado!";
}
	 	unset($_SESSION['login_session']);
		unset($_SESSION['senha_session']);
		include( 'index.php' );
}
$style ="<p> Preencha todos os campo corretamente</p></br>";

if(!$login OR !$senha){
	?>


	<?php echo "$style"; ?>


<?php

}
*/


?>

</body>
</html>
