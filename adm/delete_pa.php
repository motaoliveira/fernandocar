<?php
session_start();
require_once('globais.php');
$id = addslashes($_POST['id']);
$sqline = "SELECT * FROM `parceria` WHERE `id` = $id";
$actioQuery = mysql_query($sqline);
while($act = mysql_fetch_array($actioQuery))
		{
			$idpa = $act['id'];
			$imgpa = $act['img'];
			$titulopa = $act['titulo'];
			$descripa = $act['descri'];
		}
$arquivo = "../parceria/$imgpa";
$sql = "DELETE FROM `parceria` WHERE `parceria`.`id` = $id";
$query = mysql_query($sql);
unlink($arquivo);
$_SESSION['line1'] = "3";
?>