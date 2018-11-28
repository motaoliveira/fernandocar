<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
		include('globais.php');


?>
<script>

$(document).ready(function(){

	 $("#insDep").click(function(){
		var insDep = $('#novaDep').val();
		$.post("insDep.php", { insDep:insDep },function(get_retorno) {
		  alert(get_retorno);
		  	     location.reload();
		    });
    });


 $("#sendCat").click(function(){

		var updateCat = $('#updateCat').val();
		var catman = $('#sell').val();
		$.post("updateCat.php", { updateCat:updateCat , catman:catman},function(get_retorno) {
		  alert(get_retorno);
		    });
    });

 $("#delCat").click(function(){

	var catDel = $('#catDel').val();

	$.post("catDel.php", { catDel:catDel},function(get_retorno) {
	  alert(get_retorno);
		});
});
});
</script>
	<div style="height:20px" class="visible-xs"></div>
	<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
		<ol class="breadcrumb">
			<li><a>Loja</a></li>
			<li><a>Departamentos</a></li>
		</ol>
	</div>
	<div class="panel-group">
			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Adicionar Departamento</h3></div>
				  <div class="panel-body">
						<form role=group >
							<div class="col-md-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;>
								<label for="email" >Insira o nome de seu novo Departamento</label>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">

								<input class="form-control theme-secondary" type="text" id="novaDep"  placeholder="Novo departamento">

							</div>
							<div class="col-md-3  col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
								<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="insDep">
											<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
								</div>
							</div>


						</form>
					</div>
			</div>

			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				<div class="panel-heading"><h3>Adicione imagem ao novo departamento</h3></div>

				 <div class="panel-body">


							<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
							<!-- <a href="#"><img class="responsive img-thumbnail" src="../img/produto-sem-imagem.gif"></a>

							!-->

						<form role="form" action="upload.php" enctype="multipart/form-data" method="post">


							<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;">

									<p>Tamanho: 640 x 480 px</p>

							</div>


							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="categorzero" name="categorzero" >

									<?php
											$sql9 ="SELECT * FROM `categorias` WHERE `linkimg` LIKE 'produto-sem-imagem.gif'";

											$consult = mysql_query($sql9);

											while($mount = mysql_fetch_array($consult)){
												$idDept = $mount['id'];
												$nomeDept = $mount['tipo'];
												$likimg = $mount['linkimg'];

									?>
											<option value="<?php echo $idDept; ?>" style="background-color:#999;color:#FFF"><?php echo $nomeDept; ?></option>
									<?php
											}

									?>
										</select>
							</div>
  								<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
									<br class="visible-sm visible-xs">
									<div class="form-group">
										<input type="file" name="example" class="btn btn-default btn-block " id="input01">
									</div>
								</div>
								<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
									<div class="form-group">
										<br class="visible-sm visible-xs">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>">
											<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
									</div>
								</div>

						</form>



								<!--<input class="form-control theme-secondary btn  btn-default" type="file" name="fileUpload" placeholder="">!-->
							</div>

						<!--</form> !-->



					</div>
			</div>

			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Editar nome do departamento</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<form role=group >
							<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12" style="border:0px #000 dashed;">
								<p>Insira novo nome para seu departamento</p>
							</div>
							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="sell" name="sell" >

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
							<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
								<input class="form-control theme-secondary " type="text" id="updateCat"  placeholder="Troca nome do Departamento">

							</div>
							<div class="col-md-3  col-sm-3 col-xs-3">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendCat" >
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>
								</div>

							</form>
					</div>
				</div>
			</div>

				<div class="panel panel-<?php echo $corPainel; ?>" style="">
				<div class="panel-heading"><h3>Edite imagem do departamento</h3></div>

				 <div class="panel-body">


							<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
							<!-- <a href="#"><img class="responsive img-thumbnail" src="../img/produto-sem-imagem.gif"></a>

							!-->

						<form role="form" action="upload_Dep.php" enctype="multipart/form-data" method="post">


							<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;">

									<p>Tamanho: 640 x 480 px</p>

							</div>


							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="updateDepart" name="updateDepart" >

									<?php
											$categori ="SELECT * FROM `categorias`";

											$actioQuery = mysql_query($categori);

											while($act = mysql_fetch_array($actioQuery)){
												$idact = $act['id'];
												$nomeact = $act['tipo'];
												$linkact = $act['linkimg'];

									?>
											<option value="<?php echo $idact; ?>" style="background-color:#999;color:#FFF"><?php echo $nomeact; ?></option>
									<?php
											}

									?>
										</select>
							</div>
  								<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
									<div class="form-group">
										<input type="file" name="exemplo" class="btn btn-default btn-block " id="input02">
									</div>
								</div>
								<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
								<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendCat2">
											<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
									</div>
								</div>

						</form>



								<!--<input class="form-control theme-secondary btn  btn-default" type="file" name="fileUpload" placeholder="">!-->
							</div>

						<!--</form> !-->



					</div>
			</div>

				<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Deletar departamento</h3></div>
				  <div class="panel-body">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<form role=group >
							<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12" style="border:0px #000 dashed;">
								<p>Não havendo recuperação.</p>
							</div>
							<div class="col-md-6  col-lg-6 col-sm-12 col-xs-12">
							<select class="form-control input-md" id="catDel" name="catDel" >

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

							<div class="col-md-3  col-sm-3 col-xs-3">
							<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="delCat" >
												<span class="glyphicon glyphicon-remove"></span> delete
											</button>
										</div>
								</div>

							</form>
					</div>
				</div>
			</div>
			</div>





	</div>
</body>
</html>
