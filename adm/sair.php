<?php
		ob_start(); 
		@session_start();
		unset($_SESSION['login_session']);
		unset($_SESSION['senha_session']);
		session_destroy(); 
		header( "location:index.php" );
		
	?>