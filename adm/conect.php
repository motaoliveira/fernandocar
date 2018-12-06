<?php
//$link = mysql_connect('localhost', 'u572850543_fc', '7A0ZZq4xLtMQ');
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}else{
	$dado = mysql_select_db("u572850543_fc",$link);
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
}
?>
