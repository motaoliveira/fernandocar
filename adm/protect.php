<?php
ob_start(); 
@session_start();
$log = $_SESSION['login_session'] ;
$ses = $_SESSION['senha_session'] ;

if(!isset($log) AND (!isset($ses)))
	{
	header( "location:index.php" );	
	exit;
	}
	
 else{
$temposessao = 90; //em segundossession_start(); 
$_SESSION["sessiontime"] = time();
if ($_SESSION["sessiontime"]) { 	
	if ($_SESSION["sessiontime"] < (time() - $temposessao)) { 		
		session_unset();		
		header( "location:index.php" );	
		} 
} else { 	
	session_unset();
		} 
}
?>