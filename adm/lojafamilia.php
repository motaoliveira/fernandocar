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
<script>

$(document).ready(function(){
    $("#sendNovafan").click(function(){

		var novaFan = $('#novaFan').val();
		var sell = $('#sell').val();


		$.post("novaFan.php", { novaFan:novaFan, sell:sell },function(get_retorno) {
		  alert(get_retorno);
		    });
    });

 $("#sendRenamefan").click(function(){

		var combo1 = $('#combo1').val();
		var combo2 = $('#combo2').val();
		var newName = $('#newName').val();
		$.post("newName.php", { newName:newName, combo1:combo1, combo2:combo2 },function(get_retorno) {
		  alert(get_retorno);
		    });
    });

 $("#ddelete").click(function(){
		var combo5 = $('#combo5').val();
		var combo6 = $('#combo6').val();

		if(combo5 ==0 || combo6 == 0){
			alert("Selecione corretamente um departamento e uma Família de Produtos");
		}else{
		var r = confirm("Tem certeza que deseja deletar a Família de produtos " + combo6 +"!");
		if (r == true) {
       	$.post("ddeletefan.php", { combo5:combo5, combo6:combo6 },function(get_retorno) {
		  alert(get_retorno);
		    });
		} else {
        alert("Família não deletado!");
		}
		}
    });

	// var familiaSub = jQuery('#familiaSub'); //div Conteudo

	// $("#nat").live({
		// click:function(){

		// var sellCat = $('#sellCat').val();
		// alert("oi");
		// $.post("", { sellCat:sellCat },function(get_retorno) {
		// alert(get_retorno);
		// });
		// familiaSub.load('name.php');

		// }
	// });
});
</script>

<script type="text/javascript">

	function change3(){
	var ress10 = new Array();
	ress10[0] = new Array("Familia");
	<?php
	$bsql20 ="SELECT * FROM `categorias`";
	$bconsult20 = mysql_query($bsql20);

	while($bbanc0 = mysql_fetch_array($bconsult20)){
	$bidi0 = $bbanc0['id'];
	?>
	ress10[<?php echo $bidi0; ?>] = new Array("Familia"<?php
	$csql20 ="SELECT * FROM `subcate` WHERE `categoria` LIKE '$bidi0'";
	$cconsult20 = mysql_query($csql20);
	$rowsub = mysql_num_rows($cconsult20);

	while($cbanc = mysql_fetch_array($cconsult20)){
	$cidi = $cbanc['id'];
	$ctipoSub = $cbanc['tipoSub'];
	echo ',"'.$ctipoSub.'"';
	}
	?>);
	<?php
	}
	?>
	// var combo1Value = combo1.value;
	// if(combo1Value==2){alert("valor é " + combo1Value)}

		var combo5Value = combo5.value;
		var errs = ress10[combo5Value].length;

		// var mopo = ress[combo1Value][0];
		 if(combo5Value){
			 var elementsCount = document.forms["form3"].elements["combo6"].childElementCount;
		// contabiliza qtd de elementos dentro de cada array
		// alert("valor é " + elementsCount);
			var zcomb =	document.forms["form3"].elements["combo6"];
			// zcomb.removeChild(zcomb.childNodes[0]);
			while(zcomb.hasChildNodes()){
				zcomb.removeChild(zcomb.firstChild);
			}
			for(var i = 0;i<errs; i++ ){
			var x = document.createElement("option");
			var namesone = ress10[combo5Value][i];
			x.setAttribute("value", namesone);
			x.innerHTML = ress10[combo5Value][i];
			document.forms["form3"].elements["combo6"].appendChild(x);
			}
		}
			// alert("valor é " + ress[combo1Value][1]);
			// for(var i = 0;i<ress[combo1Value].length; i++ ){
			// }
	}



	function change2(){
	var ress1 = new Array();
	ress1[0] = new Array("Familia");
	<?php
	$bsql2 ="SELECT * FROM `categorias`";
	$bconsult2 = mysql_query($bsql2);

	while($bbanc = mysql_fetch_array($bconsult2)){
	$bidi = $bbanc['id'];
	?>
	ress1[<?php echo $bidi; ?>] = new Array("Familia"<?php
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
	// var combo1Value = combo1.value;
	// if(combo1Value==2){alert("valor é " + combo1Value)}

		var combo3Value = combo3.value;
		var errs = ress1[combo3Value].length;

		// var mopo = ress[combo1Value][0];
		 if(combo3Value){
			 var elementsCount = document.forms["form2"].elements["combo4"].childElementCount;
		// contabiliza qtd de elementos dentro de cada array
		// alert("valor é " + elementsCount);
			var zcomb =	document.forms["form2"].elements["combo4"];
			// zcomb.removeChild(zcomb.childNodes[0]);
			while(zcomb.hasChildNodes()){
				zcomb.removeChild(zcomb.firstChild);
			}
			for(var i = 0;i<errs; i++ ){
			var x = document.createElement("option");
			var namesone = ress1[combo3Value][i];
			x.setAttribute("value", namesone);
			x.innerHTML = ress1[combo3Value][i];
			document.forms["form2"].elements["combo4"].appendChild(x);
			}
		}
			// alert("valor é " + ress[combo1Value][1]);
			// for(var i = 0;i<ress[combo1Value].length; i++ ){
			// }
	}

	function change(){
	var ress = new Array();
	// var ressid = new Array();
	ress[0] = new Array("Familia");
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
	// var combo1Value = combo1.value;
	// if(combo1Value==2){alert("valor é " + combo1Value)}

		var combo1Value = combo1.value;
		var err = ress[combo1Value].length;

		// var mopo = ress[combo1Value][0];
		 if(combo1Value){
			 var elementsCount = document.forms["form1"].elements["combo2"].childElementCount;
		// contabiliza qtd de elementos dentro de cada array
		// alert("valor é " + elementsCount);
			var zcomb =	document.forms["form1"].elements["combo2"];
			// zcomb.removeChild(zcomb.childNodes[0]);
			while(zcomb.hasChildNodes()){
				zcomb.removeChild(zcomb.firstChild);
			}
			for(var i = 0;i<err; i++ ){
			var x = document.createElement("option");
			x.setAttribute("value", ress[combo1Value][i]);
			var namesone = ress[combo1Value][i]
			x.innerHTML = namesone;
			document.forms["form1"].elements["combo2"].appendChild(x);
			}
		}
			// alert("valor é " + ress[combo1Value][1]);
			// for(var i = 0;i<ress[combo1Value].length; i++ ){
			// }
	}


</script>
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

				var conteudo = jQuery("#configurarfamilia"); //div Conteudo

				$("#prod").hide();

				$("#depfam").click(function(){

					var c = $('#combo1001').val();
					var f = $('#combo2002').val();

					if(c==0 || f==0){
						alert("Selecione Departamento e Família de produtos");
					}else{

					$("#prod").show();
					$("#del").hide();
					$("#img").hide();
					$("#add").hide();
					$("#edt").hide();

					conteudo.load('sysproduto.php', {c:c,f:f});
					}
				});


			});
			</script>
<div style="height:20px" class="visible-xs"></div>
	<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
		<ol class="breadcrumb">
			<li><a>Loja</a></li>
			<li><a>Família</a></li>
		</ol>
	</div>
	<div class="panel-group">
			<div class="panel panel-<?php echo $corPainel; ?>" id="add">
				  <div class="panel-heading"><h3>Adicionar Família de Serviços</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<form id="form0" name="form0" role=group >

							<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="sell" name="sell" >
							<option value="0">Categorias</option>
									<?php
											$sql2 ="SELECT * FROM `categorias`";

											$consult2 = mysql_query($sql2);

											while($banc = mysql_fetch_array($consult2)){
												$aidi = $banc['id'];
												$nomeDept2 = $banc['tipo'];
												$likimg2 = $banc['linkimg'];

									?>
											<option value="<?php echo $aidi; ?>"  style="background-color:#999;color:#FFF"><?php echo $nomeDept2; ?></option>
									<?php
											}

									?>
										</select>
							</div>
							<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
								<input class="form-control theme-secondary" type="text" id="novaFan"  placeholder="Nova família de Serviços">

							</div>
							<div class="col-md-3  col-sm-3 col-xs-3">
									<div class="form-group">
									<br class="visible-sm visible-xs">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendNovafan" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>

							</form>
					</div>
				</div>
			</div>

			<div class="panel panel-<?php echo $corPainel; ?>" id="edt">
				  <div class="panel-heading"><h3>Editar nome de Família de Serviços</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<form id="form1" name="form1" method="post" role=group >

							<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="combo1" name="combo1" onchange="change(this)">
								<option value="0"  style="background-color:#999;color:#FFF">Categorias</option>
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
							<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12" id="familiaSub">
							<br class="visible-sm visible-xs">
							<select class="form-control input-md" id="combo2" name="combo2">
								<option value="0" >Familia</option>
							</select>
							</div>
							<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
								<input class="form-control theme-secondary " type="text" id="newName"  placeholder="Editar nome de Família">

							</div>
							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendRenamefan" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>

						</form>
					</div>
				</div>
			</div>


			<div class="panel panel-<?php echo $corPainel; ?>" id="img">
				  <div class="panel-heading"><h3>Enviar imagem para Família de Serviços</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<form id="form2" name="form2" action="upload_fam.php" enctype="multipart/form-data"  method="post" role=group >

							<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="combo3" name="combo3" onchange="change2(this)">
								<option value="0"  style="background-color:#999;color:#FFF">Categorias</option>
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
							<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12" id="familiaSub">
							<br class="visible-sm visible-xs">
							<select class="form-control input-md" id="combo4" name="combo4">
								<option value="0" >Familia</option>
							</select>
							</div>
							<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
								<div class="form-group">
										<input type="file" name="familiaimg" class="btn btn-default btn-block " id="input02">
									</div>
							</div>
							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendimgfan" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>

						</form>
					</div>
				</div>
			</div>


		<div class="panel panel-<?php echo $corPainel; ?>" id="del" >
				  <div class="panel-heading"><h3>Deletar Família de Produtos</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<form id="form3" name="form3" role=group >

							<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="combo5" name="combo5" onchange="change3(this)">
								<option value="0"  style="background-color:#999;color:#FFF">Categorias</option>
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
							<select class="form-control input-md" id="combo6" name="combo6">
								<option value="0" >Familia</option>
							</select>
							</div>

							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-danger" id="ddelete" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>

						</form>
					</div>
				</div>
			</div>



				<div class="panel panel-<?php echo $corPainel; ?>" style="">
							  <div class="panel-heading"><h3>Configurar Família de Serviços</h3></div>
							  <div class="panel-body">
								<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">


										<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
										<select class="form-control input-md" id="combo1001" name="combo1001" onchange="changeT(this)">
											<option value="0"  style="background-color:#999;color:#FFF">Categorias</option>
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
													<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="depfam" >
															<span class="glyphicon glyphicon-ok"></span> Aplicar
														</button>
													</div>
											</div>


								</div>
							</div>
				</div>
						<div class="panel panel-<?php echo $corPainel; ?>" id="prod">
							 <div class="panel-heading"><h3>Configurar Informações do Cliente da Família</h3></div>
							 <div class="panel-body">
							  <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" id="configurarfamilia">

							  </div>


							</div>
						</div>
</body>
</html>
