
<meta charset="utf-8">

<?php
	//include('conect.php');
	include('globais.php');

		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	}
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

	$("#insCorbar").click(function(){
		var novaCorbar = $('#novaCorbar').val();
			//alert(insBaseCor);
		$.post("novaCorbar.php", { novaCorbar:novaCorbar },function(get_retorno) {
		  alert(get_retorno);
		     location.reload();
		    });
    });

    $("#insBaseCor").click(function(){
		var insBaseCor = $('#novaBaseCor').val();
			//alert(insBaseCor);
		$.post("insBaseCor.php", { insBaseCor:insBaseCor },function(get_retorno) {
		  alert(get_retorno);
		     location.reload();
		    });
    });

    $("#aplCorMenuLat").click(function(){
		var aplCorMenuLat = $('#novoMenuLat').val();
		$.post("aplCorMenuLat.php", { aplCorMenuLat:aplCorMenuLat },function(get_retorno) {
		  alert(get_retorno);
		     location.reload();
		    });
    });

	 $("#barCor").click(function(){
		var barCor = $('#novabarCor').val();
		$.post("barCor.php", { barCor:barCor },function(get_retorno) {
		  alert(get_retorno);
		     location.reload();
		    });
    });

	$("#mudaPainel").click(function(){
		var novoPainel = $('#novoPainel').val();
		$.post("novoPainel.php", { novoPainel:novoPainel },function(get_retorno) {
		  alert(get_retorno);
		     location.reload();
		    });
    });

	//DATA-TOOGLE TOOTIP

	  });
</script>
<!--div style="height:20px" class="visible-xs"></div-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Configurações</li>
  <li class="breadcrumb-item active">Cores</li>
</ol>

			<div class="container">
					<!--<div class="panel panel-<?php echo $corPainel; ?>" style="">
						  <div class="panel-heading"><h3>Alterar cor do Topo</h3></div>
						  <div class="panel-body">
								<form role=group >
									<div class="col-md-3 col-sm-3 col-xs-12 form-group" style="border:0px #000 dashed;>
										<label for="email" >Insira nova cor para o seu Topo</label>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $corTopo; ?>">

									</div>
									<div class="col-md-3  col-sm-12 col-xs-12">
										<div class="form-group">
											<button  class="btn btn-secondary btn-block" id="insCor">
												<span class="glyphicon glyphicon-ok"></span> Aplicar
											</button>
										</div>

									</div>


								</form>
							</div>
					</div>!-->

					<div class="card card-<?php echo $corPainel; ?>" style="display:none">
					<div class="card-heading"><h3>Alterar cor do Topo</h3></div>
						<div class="card-block">
							<form role=group >
								<div class="col-12 form-group" >
									<label for="email" >Insira nova cor para o seu Topo</label>
								</div>
								<div class="col-12">
									<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $corTopo; ?>">

								</div>
								<div class="col-12">
									<div class="form-group">
									<button class="btn btn-<?php echo $corMenuAdm; ?>" id="insCor">
									<span class="glyphicon glyphicon-ok"></span> Aplicar
									</button>
									</div>
								</div>


							</form>
						</div>
					</div>
					<div class="row">
						<div class="card w-100">
						  <h3 class="card-header">Alterar cor topo do Nix</h3>
						  <div class="card-block">
							<h4 class="card-title"></h4>
							<p class="card-text">Altere a cor do topo do seu administrador de conteúdo.</p>

								<form role=group >

									<div class="col-12 ">
										<input class="form-control theme-secondary" type="text" id="novaCorbar"  placeholder="<?php echo $corMenu; ?>">

									</div>
									<div class="col-12"><br>
										<div class="form-group">
										<button class="btn btn-<?php echo $corMenuAdm; ?>" id="insCorbar" >
										<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
										</div>
									</div>


								</form>

						  </div>
						</div>
					</div>




					<div class="row">
						<div class="card w-100">
						  <h3 class="card-header">Alterar cor do Menu Lateral do Nix</h3>
						  <div class="card-block">
							<h4 class="card-title"></h4>
							<p class="card-text">Insira nova cor dos Menu laterais.</p>

								<form role=group >

									<div class="col-12 ">
									<select class="form-control input-md" id="novoMenuLat" >
											<option value="secondary" style="background-color:grey;color:#000" <?php if($corMenuAdm=="secondary"){echo "selected";} ?>>Cinza</option>
											<option value="default" style="background-color:aliceblue;color:#000" <?php if($corMenuAdm=="default"){echo "selected";} ?>>Branco</option>
											<option value="primary" style="background-color:deepskyblue;color:#FFF" <?php if($corMenuAdm=="primary"){echo "selected";} ?>>Azul</option>
											<option value="info" style="background-color:deepskyblue;color:#FFF" <?php if($corMenuAdm=="info"){echo "selected";} ?>>Cian</option>]
											<option value="danger" style="background-color:indianred;color:#FFF" <?php if($corMenuAdm=="danger"){echo "selected";} ?>>Vermelho</option>
											<option value="success" style="background-color:green;color:#FFF" <?php if($corMenuAdm=="success"){echo "selected";} ?>>Verde</option>
											<option value="inverse" style="background-color:Black;color:#FFF" <?php if($corPainel=="inverse"){echo "selected";} ?>>Verde</option>

										</select>
									</div>
									<div class="col-12"><br>
										<div class="form-group">
										<button class="btn btn-<?php echo $corMenuAdm; ?>" id="aplCorMenuLat" >
										<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
										</div>
									</div>


								</form>

						  </div>
						</div>
					</div>
					<!--div class="panel panel-<?php echo $corPainel; ?>" style="display:none">
					<div class="panel-heading"><h3>Alterar cor do Rodapé</h3></div>
						<div class="panel-body">
							<form role=group >
								<div class="col-md-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;>
									<label for="email" >Insira nova cor para seu rodapé</label>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<input class="form-control theme-secondary" type="text" id="novaBaseCor"  placeholder="<?php echo $corBase; ?>">

								</div>
								<div class="col-md-3  col-sm-12 col-xs-12">
									<div class="form-group">
									<button class="btn btn-<?php echo $corMenuAdm; ?>" id="insBaseCor" >
									<span class="glyphicon glyphicon-ok"></span> Aplicar
									</button>
									</div>
								</div>


							</form>
						</div>
					</div-->

					<!--div class="panel panel-<?php echo $corPainel; ?>" style="">
					<div class="panel-heading"><h3>Alterar cor do Menu Lateral do Nix</h3></div>
						<div class="panel-body">
							<form role=group >
								<div class="col-md-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;>
									<label for="email" >Insira nova cor para seu rodapé</label>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<select class="form-control input-md" id="novoMenuLat" >
											<option value="secondary" style="background-color:grey;color:#000" <?php if($corMenuAdm=="secondary"){echo "selected";} ?>>Cinza</option>
											<option value="default" style="background-color:aliceblue;color:#000" <?php if($corMenuAdm=="default"){echo "selected";} ?>>Branco</option>
											<option value="primary" style="background-color:deepskyblue;color:#FFF" <?php if($corMenuAdm=="primary"){echo "selected";} ?>>Azul</option>
											<option value="info" style="background-color:deepskyblue;color:#FFF" <?php if($corMenuAdm=="info"){echo "selected";} ?>>Cian</option>]
											<option value="danger" style="background-color:indianred;color:#FFF" <?php if($corMenuAdm=="danger"){echo "selected";} ?>>Vermelho</option>
											<option value="success" style="background-color:green;color:#FFF" <?php if($corMenuAdm=="success"){echo "selected";} ?>>Verde</option>
											<option value="inverse" style="background-color:Black;color:#FFF" <?php if($corPainel=="inverse"){echo "selected";} ?>>Verde</option>

										</select>
								</div>
								<div class="col-md-3  col-sm-12 col-xs-12">
									<div class="form-group">
									<button class="btn btn-<?php echo $corMenuAdm; ?>" id="aplCorMenuLat" >
									<span class="glyphicon glyphicon-ok"></span> Aplicar
									</button>
									</div>
								</div>


							</form>
						</div>
					</div-->


					<!--div class="panel panel-<?php echo $corPainel; ?>" style="">
					<div class="panel-heading"><h3>Alterar cor dos Paineis</h3></div>
						<div class="panel-body">
							<form role=group >
								<div class="col-md-3 col-sm-12 col-xs-12 form-group" style="border:0px #000 dashed;>
									<label for="email" >Insira nova cor dos Paineis</label>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<select class="form-control input-md" id="novoPainel" >
											<option value="default" style="background-color:grey;color:#000" <?php if($corPainel=="default"){echo "selected";} ?>>Cinza</option>
											<option value="secundary" style="background-color:aliceblue;color:#000" <?php if($corPainel=="secundary"){echo "selected";} ?>>Branco</option>
											<option value="primary" style="background-color:deepskyblue;color:#FFF" <?php if($corPainel=="primary"){echo "selected";} ?>>Azul</option>
											<option value="info" style="background-color:deepskyblue;color:#FFF" <?php if($corPainel=="info"){echo "selected";} ?>>Cian</option>]
											<option value="danger" style="background-color:indianred;color:#FFF"<?php if($corPainel=="danger"){echo "selected";} ?>>Vermelho</option>
											<option value="success" style="background-color:green;color:#FFF" <?php if($corPainel=="success"){echo "selected";} ?>>Verde</option>
											<option value="inverse" style="background-color:Black;color:#FFF" <?php if($corPainel=="inverse"){echo "selected";} ?>>Verde</option>
										</select>
								</div>
								<div class="col-md-3  col-sm-12 col-xs-12">
									<div class="form-group">
									<button class="btn btn-<?php echo $corMenuAdm; ?>" id="mudaPainel" >
									<span class="glyphicon glyphicon-ok"></span> Aplicar
									</button>
									</div>
								</div>


							</form>
						</div>
					</div-->
					<!--

					<div class="panel panel-<?php echo $corPainel; ?>" style="">
						  <div class="panel-heading"><h3>Alterar do Menu</h3></div>
						  <div class="panel-body">
								<form role=group >
									<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
										<label for="email" >Insira nova cor para seu Menu</label>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<select class="form-control input-md" id="novoMenuLat" >
											<option value="secondary" style="background-color:grey;color:#000" <?php if($corMenuAdm=="secondary"){echo "selected";} ?>>Cinza</option>
											<option value="default" style="background-color:aliceblue;color:#000" <?php if($corMenuAdm=="default"){echo "selected";} ?>>Branco</option>
											<option value="primary" style="background-color:deepskyblue;color:#FFF" <?php if($corMenuAdm=="primary"){echo "selected";} ?>>Azul</option>
											<option value="info" style="background-color:deepskyblue;color:#FFF" <?php if($corMenuAdm=="info"){echo "selected";} ?>>Cian</option>]
											<option value="danger" style="background-color:indianred;color:#FFF" <?php if($corMenuAdm=="danger"){echo "selected";} ?>>Vermelho</option>
											<option value="success" style="background-color:green;color:#FFF" <?php if($corMenuAdm=="success"){echo "selected";} ?>>Verde</option>
											<option value="inverse" style="background-color:Black;color:#FFF" <?php if($corPainel=="inverse"){echo "selected";} ?>>Verde</option>

										</select>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<button type="submit" class="btn btn-secondary btn-block" id="aplCorMenuLat" >Aplicar</button>
									</div>


								</form>
							</div>
					</div>

					<div class="panel panel-<?php echo $corPainel; ?>" style="">
						  <div class="panel-heading"><h3>Alterar cor das barras Horizontais</h3></div>
						  <div class="panel-body">
								<form role=group >
									<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
										<label for="email" >Insira nova cor para as barras</label>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<input class="form-control theme-secondary" type="text" id="novabarCor"  placeholder="<?php echo $corMenu; ?>">

									</div>
									<div class="col-md-3  col-sm-3 col-xs-3">
										<a class="btn btn-secondary btn-block" id="barCor" style="background-color:<?php echo $corMenu; ?>;" >Aplicar</a>
									</div>


								</form>
							</div>
					</div>

					<div class="panel panel-<?php echo $corPainel; ?>" style="">
						  <div class="panel-heading"><h3>Alterar cor dos Paineis</h3></div>
						  <div class="panel-body">
								<form role=group >
									<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
										<label for="email" >Insira nova cor dos Paineis</label>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<select class="form-control input-md" id="novoPainel" >
											<option value="default" style="background-color:grey;color:#000" <?php if($corPainel=="default"){echo "selected";} ?>>Cinza</option>
											<option value="secundary" style="background-color:aliceblue;color:#000" <?php if($corPainel=="secundary"){echo "selected";} ?>>Branco</option>
											<option value="primary" style="background-color:deepskyblue;color:#FFF" <?php if($corPainel=="primary"){echo "selected";} ?>>Azul</option>
											<option value="info" style="background-color:deepskyblue;color:#FFF" <?php if($corPainel=="info"){echo "selected";} ?>>Cian</option>]
											<option value="danger" style="background-color:indianred;color:#FFF"<?php if($corPainel=="danger"){echo "selected";} ?>>Vermelho</option>
											<option value="success" style="background-color:green;color:#FFF" <?php if($corPainel=="success"){echo "selected";} ?>>Verde</option>
											<option value="inverse" style="background-color:Black;color:#FFF" <?php if($corPainel=="inverse"){echo "selected";} ?>>Verde</option>
										</select>
									</div>
									<div class="col-md-3  col-sm-3 col-xs-3">
										<a class="btn btn-default btn-block "  id="mudaPainel" >Aplicar</a>
									</div>


								</form>
							</div>
					</div>
					!-->

			</div>
