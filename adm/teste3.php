<?php

	session_start();
	
	$_SESSION['login_session'] = "sergio";
	$_SESSION['senha_session'] = "mota";
	
	
	print_r($_SESSION);
	
?>