<?php


	session_start();
	include("globais.php");

	//print_r($_POST);
	
	$categoria100 = trim($_POST["combo5"]);
	$subcategoria100 = trim($_POST["combo6"]);
	
	$sqlbusca = "SELECT * FROM `subcate` WHERE `categoria` LIKE '$categoria100' AND `tipoSub` LIKE '$subcategoria100'";
	
	$z1 = mysql_query($sqlbusca);
	
	while($dobanco = mysql_fetch_array($z1)){
		
		$idSub = $dobanco["id"];
		$idCat = $dobanco["categoria"];
		
	}
	
	$sqlProd = "SELECT * FROM `produto` WHERE `prodCat` = $idCat AND `prodSub` = $idSub ORDER BY `produto`.`id` ASC";
	
	$w1 = mysql_query($sqlProd);
	
	$w2 = mysql_num_rows($w1);
	
	// echo $w2;
	
	
	if($w2 >=1){ 
	echo "Esta Famílias contém produtos registrados e por isso não podem ser deletada. Delete primeiro os produtos!
	
	";
	
	}
	
	elseif($w2 <1)	{
		echo "Esta família de produtos está vazia, e está sendo deletada!";
		$sqline="DELETE FROM `clubedoa_fsa`.`subcate` WHERE `subcate`.`id` = $idSub";
		// echo $sqline;
		mysql_query($sqline);
	}
	
	// elseif($w2 ==1){echo $w2." é igual a 1";}
	
	/*if(!$w2){
		
				echo "Não existe produto cadastrado nessa família.";
				
				
			}elseif($w2 == 1){
				
				echo "Existe produto cadastrado nessa família.";}
				
				elseif($w2 > 1){echo "Existem produtos cadastrados nessa família.";
				
				}
						
		*/			
				
	
?>