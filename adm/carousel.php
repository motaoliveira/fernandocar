
<?php
	//include('conect.php');
	include('globais.php');

		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	}
?>

<script>
$(document).ready(function(){

	 $("#sendBanner").click(function(){

		var linkbaner2 = $('#link').val();
		var carousel_ins2 = $('#carousel_ins').val();
		var arq2 = $('#arq').val();
		//$.post("carousel_ins.php", { linkbaner:linkbaner2 , carousel:carousel2, arq:arq2},function(get_retorno) {
		 // alert(get_retorno);
		  // });
		  //alert(linkbaner2);
    });



	  });
</script>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">Banner</li>
			<li class="breadcrumb-item active">Premium</li>
		</ol>




<div class="container">
				<div class="row">
                <div class="card w-100"><h3 class="card-header">Premium</h3>
				<div class="card-block">
							<h4 class="card-title"></h4>
							<p class="card-text">Altere um banner de cada vez, utilize o número do banner para facilitar. Tamanho padrão para a imagem do Banner é de 1450 x 620 px</p>

						<form role="form" action="carousel_ins.php" enctype="multipart/form-data" method="post">

							<div class="col-12" >
								<select class="form-control input-md" id="carousel_ins" name="carousel" >
									<?php
												$categori ="SELECT * FROM `carousel`";

												$actioQuery = mysql_query($categori);

												while($act = mysql_fetch_array($actioQuery)){
													$idact = $act['id'];
													$nomeact = $act['banner'];
													$imgact = $act['img'];
													$tituloact = $act['titulo'];
								 					$descricaoact= $act['descricao'];
													$linkact = $act['link'];
													$ordemkact = $act['ordem'];

										?>
												<option value="<?php echo $nomeact; ?>" style="background-color:#999;color:#FFF"><?php echo $nomeact; ?></option>
										<?php
												}
										?>
								</select>
							</div>
  								<div class="col-12" >
										<input type="hidden" name="antigotitulo"  value="<?php echo $tituloact ?>">
										<input type="hidden" name="antigodescricao"  value="<?php echo $descricaoact ?>">
										<input type="hidden" name="antigonome"  value="<?php echo $nomeact ?>">
										<input type="hidden" name="antigolink"  value="<?php echo $linkact ?>">
										<div class="form-group" >
										<br>
										<input type="file" name="exemplo" class="btn btn-outline-secondary btn-block " id="arq">
									</div>
								</div>
								<div class="col-12 form-group" >
									<input class="form-control theme-secondary" type="text" id="titulo"  placeholder="Titulo" name="titulo" value="">

								</div>
								<div class="col-12 form-group" >
									<input class="form-control theme-secondary" type="text" id="descricao"  placeholder="Descrição" name="descricao" value="">

								</div>
                <div class="col-12 form-group" >
									<input class="form-control theme-secondary" type="text" id="link"  placeholder="Insira o link do Banner" name="link" value="">

								</div>
                                <div class="col-12 form-group">

									    <label>
									    <input type="checkbox" name="window" value="_blank" id="window_1" />
									    Nova Janela</label>
									  <br />

                                </div>
								<div class="col-12" >
								<br class="visible-sm visible-xs">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendBanner">
											<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
									</div>
								</div>

						</form>



								<!--<input class="form-control theme-secondary btn  btn-default" type="file" name="fileUpload" placeholder="">!-->


						<!--</form> !-->



				</div>
				</div>
			</div>
			</div>
<div class="container">
<div class="row" >




				<div class="card w-100"><h3 class="card-header">Imagens dos Banner's</h3>

				 <div class="card-block">
<?php
											$categori ="SELECT * FROM `carousel`";

											$actioQuery = mysql_query($categori);

											while($act = mysql_fetch_array($actioQuery)){
												$idact = $act['id'];
												$nomeact = $act['banner'];
												$imgact = $act['img'];
												$tituloact = $act['titulo'];
												$descricaoact= $act['descricao'];
												$linkact = $act['link'];
												$ordemkact = $act['ordem'];

									?>
			<div class="col-12">

				<img class="img-fluid" src="../image/<?php echo $imgact; ?>"/><br></div>
				<div class="col-12">
					<a class="btn btn-secondary disabled"><?php echo $nomeact[7]; ?></a><br>
				</div>
				<div class="col-12">
					<a class="btn btn-secondary disabled"><?php echo $linkact; ?></a><br>
				</div>

									<?php
											}

									?>
									</div>
            </div>
</div>
</div>
