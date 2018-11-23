<?php
ob_start(); 
@session_start();

echo $_POST;
print_r($_SESSION);

?>