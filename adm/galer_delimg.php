<?php

//print_r($_POST);
$arquivo = $_POST['name'];
$pasta = $_POST['pasta'];
//echo "$arquivo";

unlink("../galeria/$pasta/fotos/$arquivo");

?>