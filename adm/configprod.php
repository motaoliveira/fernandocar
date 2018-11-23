<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	//include('../conect.php');
	include('globais.php');
	
	
?>

<script type="text/javascript">

	function changeT(){
	var ress = new Array();
	var ressid = new Array();
	<?php 
	$bsql2 ="SELECT * FROM `categorias`";
	$bconsult2 = mysql_query($bsql2);
	while($bbanc = mysql_fetch_array($bconsult2)){
	$bidi = $bbanc['id'];
	?>		
	ressid[<?php echo $bidi; ?>] = new Array("0"<?php 
	$csql2 ="SELECT * FROM `subcate` WHERE `categoria` LIKE '$bidi'";
	$cconsult2 = mysql_query($csql2);
	$rowsub = mysql_num_rows($cconsult2);
	while($cbanc = mysql_fetch_array($cconsult2)){
	$cidi = $cbanc['id'];
	$ctipoSub = $cbanc['tipoSub'];
	echo ',"'.$cidi.'"';
	}
	?>);
	<?php 
	}
	?>		
	<?php 
	$bsql2 ="SELECT * FROM `categorias`";
	$bconsult2 = mysql_query($bsql2);
	while($bbanc = mysql_fetch_array($bconsult2)){
	$bidi = $bbanc['id'];
	?>		
	ress[<?php echo $bidi; ?>] = new Array("Familia"<?php 
	$csql2 ="SELECT * FROM `subcate` WHERE `categoria` LIKE '$bidi'";
	$cconsult2 = mysql_query($csql2);
	$rowsub = mysql_num_rows($cconsult2);
	while($cbanc = mysql_fetch_array($cconsult2)){
	$cidi = $cbanc['id'];
	$ctipoSub = $cbanc['tipoSub'];
	echo ',"'.$ctipoSub.'"';
	}
	?>);
	<?php 
	}
	?>
		var combo1001Value = combo1001.value;
		var err = ress[combo1001Value].length;
		
			if(combo1001Value){
			 
				 var elementsCount = document.getElementById("combo2002").childElementCount;
			
				// alert("valor é " + elementsCount);
				var zcomb =	document.getElementById("combo2002");
				
					while(zcomb.hasChildNodes()){
						zcomb.removeChild(zcomb.firstChild);	
					}
				for(var i = 0;i<err; i++ ){
				var x = document.createElement("option");
				x.setAttribute("value", ressid[combo1001Value][i]);
				var namesone = ress[combo1001Value][i]
				x.innerHTML = namesone;
				document.getElementById("combo2002").appendChild(x);
				}
			}
			
	}
	

</script>
<script>

$(document).ready(function(){
	
	var conteudo = jQuery("#produtoInserir"); //div Conteudo

	$("#prod").hide();
	
    $("#depfam").click(function(){
		
		var c = $('#combo1001').val();
		var f = $('#combo2002').val();
		
		if(c==0 || f==0){
			alert("Selecione Departamento e Família de produtos");
		}else{
		
		$("#prod").show();
		
		conteudo.load('sysproduto.php', {c:c,f:f});
		}
    });

 
});
</script>
	<div style="height:20px" class="visible-xs"></div>
	<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
		<ol class="breadcrumb">
			<li><a>Loja</a></li>
			<li><a>Produtos</a></li>
		</ol>
	</div>
	<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Configurar Família de Produtos</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						
							
							<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="combo1001" name="combo1001" onchange="changeT(this)">
								<option value="0"  style="background-color:#999;color:#FFF">Departamento</option>
							<?php 
									$sql2 ="SELECT * FROM `categorias`";
									
									$consult2 = mysql_query($sql2);
								
									while($banc = mysql_fetch_array($consult2)){
										$aidi = $banc['id'];
										$nomeDept2 = $banc['tipo'];
										$likimg2 = $banc['linkimg'];
										
							?>		
								<option value="<?php echo $aidi; ?>"  style="background-color:#999;color:#FFF" ><?php echo $nomeDept2; ?></option>
							<?php
									}
							
							?>
							
							</select>
							</div>
							<div class="col-md-5  col-lg-5 col-sm-12 col-xs-12" >
							<br class="visible-sm visible-xs">
							<select class="form-control input-md" id="combo2002" name="combo2002">
								<option value="0" >Familia</option>
							</select>
							</div>
							
							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-primary" id="depfam" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>	
								 
						
					</div>
				</div>
	</div>
			<div class="panel panel-<?php echo $corPainel; ?>" id="prod">
				  <div class="panel-heading"><h3>Configurar Informações do produto da Família</h3></div>
				  <div class="panel-body">
				  <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" id="produtoInserir">
				  
				  </div>