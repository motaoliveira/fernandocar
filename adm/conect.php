<?php




 //$link1 = mysql_connect('localhost', 'ibantec_sergio', '.Mota3489');
$link1 = mysql_connect('localhost', 'root', '');
if (!$link1) {
    die('Could not connect: ' . mysql_error());
}else{
	//na internet
	//$dado = mysql_select_db("colegiosafra2",$link1);

	//localhost
	$dado = mysql_select_db("u644261243_av",$link1);
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

}
?>
