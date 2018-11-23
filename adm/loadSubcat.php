
<?php

	print_r($_POST);
	$var = $_POST['sellCat'];
?>	
<script>
$.post("name.php", { sellCat:<?php echo $var; ?> },function(get_retorno) {
		 
		 //alert(get_retorno);
		  //familiaSub.load('name.php');
});
		  
</script>