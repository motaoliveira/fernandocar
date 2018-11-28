<?php

	include('conect.php');
	include('globais.php');
?>
<script>
	$(document).ready(function(){

		$("#insCor").click(function(){
			var insCor = $('#novaCor').val();
			$.post("insCor.php", { insCor:insCor },function(get_retorno) {
			  alert(get_retorno);
				 location.reload();
				});
		});

		$("#insBaseCor").click(function(){
			var insBaseCor = $('#novaBaseCor').val();
			$.post("insBaseCor.php", { insBaseCor:insBaseCor },function(get_retorno) {
			  alert(get_retorno);
				 location.reload();
				});
		});

	});
</script>
  <style>
  .list-group-item{
  }
  </style>
	<div class="junbotrom" style="border:0px #000 dashed;margin-top:0px;height:65px;">
		<ol class="breadcrumb">
			<li><p>Configurações</p></li>
			<li><a>Logos</a></li>
		</ol>
	</div>
				<div class="panel-group">
					<div class="panel panel-<?php echo $corPainel; ?>" style="">
								  <div class="panel-heading"><h3>Altere a logo principal do site</h3></div>
								  <div class="panel-body">
										<form role="form" action="uploadlogo.php" enctype="multipart/form-data" method="post">
						<hr>

							<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;">

									<p>Tamanho: 400 x 70 px</p>

							</div>


							<div class="col-md-2  col-lg-2 col-sm-12 col-xs-12">

							</div>
  								<div class="col-md-4  col-lg-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="file" name="example" class="btn btn-default btn-block " id="input01">
									</div>
								</div>
								<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12">
									<div class="form-group">
										<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>">
											<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
									</div>
								</div>

						</form>
									</div>
					</div>



					<div class="panel panel-default" style="">
						<div class="panel-heading"><h3>Alterar logo final</h3></div>

						 <div class="panel-body">
								<form action="" method="post" enctype="multipart/form-data" role=group >
									<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
										<label for="email" >Envie nova logo para o topo do site</label>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<input class="form-control theme-secondary btn  btn-default" type="file" id="logorodape"  placeholder="<?php echo $corTopo; ?>">

									</div>
									<div class="col-md-3  col-sm-3 col-xs-3">
										<button type="submit" class="btn btn-secondary btn-block" id="logope"  >enviar arquivo</button>
									</div>


								</form>
							</div>
					</div>






				</div>
