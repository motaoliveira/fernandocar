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

	function change(){
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
		var combo1Value = combo1.value;
		var err = ress[combo1Value].length;
		
			if(combo1Value){
			 
				 var elementsCount = document.getElementById("combo2").childElementCount;
			
				// alert("valor é " + elementsCount);
				var zcomb =	document.getElementById("combo2");
				
					while(zcomb.hasChildNodes()){
						zcomb.removeChild(zcomb.firstChild);	
					}
				for(var i = 0;i<err; i++ ){
				var x = document.createElement("option");
				x.setAttribute("value", ressid[combo1Value][i]);
				var namesone = ress[combo1Value][i]
				x.innerHTML = namesone;
				document.getElementById("combo2").appendChild(x);
				}
			}		
	}
	function change2(){
	var ressum = new Array();
	var ressumid = new Array();
	<?php 
	$qlq2 ="SELECT * FROM `categorias`";
	$bconsult20 = mysql_query($qlq2);
	while($bbanc = mysql_fetch_array($bconsult20)){
	$bidi = $bbanc['id'];
	?>		
	ressumid[<?php echo $bidi; ?>] = new Array("0"<?php 
	$csql20 ="SELECT * FROM `subcate` WHERE `categoria` LIKE '$bidi'";
	$cconsult2 = mysql_query($csql20);
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
	$qlq2 ="SELECT * FROM `categorias`";
	$bconsult20 = mysql_query($qlq2);
	while($bbanc = mysql_fetch_array($bconsult20)){
	$bidi = $bbanc['id'];
	?>		
	ressum[<?php echo $bidi; ?>] = new Array("Familia"<?php 
	$csql20 ="SELECT * FROM `subcate` WHERE `categoria` LIKE '$bidi'";
	$cconsult2 = mysql_query($csql20);
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
		var combo10Value = combo10.value;
		var err = ressum[combo10Value].length;
		
			if(combo10Value){
			 
				 var elementsCount = document.getElementById("combo20").childElementCount;
			
				// alert("valor é " + elementsCount);
				var zcomb =	document.getElementById("combo20");
				
					while(zcomb.hasChildNodes()){
						zcomb.removeChild(zcomb.firstChild);	
					}
				for(var i = 0;i<err; i++ ){
				var x = document.createElement("option");
				x.setAttribute("value", ressumid[combo10Value][i]);
				var namesone = ressum[combo10Value][i]
				x.innerHTML = namesone;
				document.getElementById("combo20").appendChild(x);
				}
			}		
	}
</script>
<script>

$(document).ready(function(){
	
	var conteudo1 = jQuery("#produtoInserir"); //div Conteudo
	var conteudo2 = jQuery("#lista"); //div Conteudo

	$("#prod").hide();	
	$("#editar").hide();
	
    $("#depfam").click(function(){
		
		var c = $('#combo1').val();
		var f = $('#combo2').val();
		
		if(c==0 || f==0){
			alert("Selecione Departamento e Família de produtos");
		}else{
		
		$("#prod").show();
		
		conteudo1.load('addproduto.php', {c:c,f:f});
		$("#editar0").hide();
		}
    });

	
    $("#produtoList").click(function(){
		
		var c = $('#combo10').val();
		var f = $('#combo20').val();
		
		if(c==0 || f==0){
			alert("Selecione Departamento e Família de produtos");
		}else{
		
		$("#editar").show();
		$("#ins").hide();
		conteudo2.load('listarproduto.php', {c:c,f:f});
		
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
	<div class="panel panel-<?php echo $corPainel; ?>" id="ins">
				  <div class="panel-heading"><h3>Inserir Produto</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						
							
							<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="combo1" name="combo1" onchange="change(this)">
								<option value="0"  style="background-color:#999;color:#FFF">Departamento</option>
							<?php 
									$sql2 ="SELECT * FROM `categorias`";
									
									$consult2 = mysql_query($sql2);
									// $n = 0;
									while($banc = mysql_fetch_array($consult2)){
										$aidi = $banc['id'];
										$nomeDept2 = $banc['tipo'];
										$likimg2 = $banc['linkimg'];
										// $n++;
							?>		
								<option value="<?php echo $aidi; ?>"  style="background-color:#999;color:#FFF" ><?php echo $nomeDept2; ?></option>
							<?php
									}
							
							?>
							
							</select>
							</div>
							<div class="col-md-5  col-lg-5 col-sm-12 col-xs-12" >
							<br class="visible-sm visible-xs">
							<select class="form-control input-md" id="combo2" name="combo2">
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
				  <div class="panel-heading"><h3>Inserir Produto</h3></div>
					<div class="panel-body">
					  <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" id="produtoInserir">
					  
					  </div>
					</div>
			</div>
	
	<div class="panel panel-<?php echo $corPainel; ?>" id="editar0">
				  <div class="panel-heading"><h3>Editar / Deletar produtos</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						
							
							<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="combo10" name="combo10" onchange="change2(this)">
								<option value="0"  style="background-color:#999;color:#FFF">Departamento</option>
							<?php 
									$sql2 ="SELECT * FROM `categorias`";
									
									$consult2 = mysql_query($sql2);
									// $n = 0;
									while($banc = mysql_fetch_array($consult2)){
										$aidi = $banc['id'];
										$nomeDept2 = $banc['tipo'];
										$likimg2 = $banc['linkimg'];
										// $n++;
							?>		
								<option value="<?php echo $aidi; ?>"  style="background-color:#999;color:#FFF" ><?php echo $nomeDept2; ?></option>
							<?php
									}
							
							?>
							
							</select>
							</div>
							<div class="col-md-5  col-lg-5 col-sm-12 col-xs-12" >
							<br class="visible-sm visible-xs">
							<select class="form-control input-md" id="combo20" name="combo20">
								<option value="0" >Familia</option>
							</select>
							</div>
							
							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-primary" id="produtoList" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>	
								 
						
					</div>
				</div>
	</div>
			<div class="panel panel-<?php echo $corPainel; ?>" id="editar">
				  <div class="panel-heading"><h3>Listar Produtos</h3></div>
					<div class="panel-body">
					  <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" id="lista">
					  
					  </div>
					</div>
			</div>