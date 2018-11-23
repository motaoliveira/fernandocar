<?php
session_start();
	
echo $_POST;
	if(!$_POST){
	echo "nao existe";
	}else{
	echo "existe $_POST";
		
	}


?>