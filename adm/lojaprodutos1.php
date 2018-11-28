<?php
	ob_start();
	//session_start();
 	include('globais.php');
 ?>
<html>

<head>
<meta charset="utf-8">
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

				alert("valor � " + elementsCount);
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


</script>
<script>

$(document).ready(function(){

	var conteudo = jQuery("#produtoInserir"); //div Conteudo

	$("#prod").hide();

    $("#depfam").click(function(){

		var c = $('#combo1').val();
		var f = $('#combo2').val();


		$("#prod").show();

		conteudo.load('addproduto.php', {c:c,f:f});

    });


});
</script>

<meta charset="utf-8">

	<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Selecione Departamento e Fam�lia</h3></div>
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
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="depfam" >
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
