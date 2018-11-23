
<?php
	//include('../conect.php');
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

    $("#insBaseCor").click(function(){
		var insBaseCor = $('#novaBaseCor').val();		
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
			<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
				<ol class="breadcrumb">
				<style></style>
					<li><p>Configurações</p></li>
					<li><a>Cores</a></li>
					 
				</ol>
			</div>
			<div class="panel-group">
					<div class="panel panel-<?php echo $corPainel; ?>" style="">
						  <div class="panel-heading"><h3>Alterar cor do Topo</h3></div>
						  <div class="panel-body">
								<form role=group >
									<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
										<label for="email" >Insira nova cor para o seu Topo</label>	
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $corTopo; ?>">
								
									</div>
									<div class="col-md-3  col-sm-3 col-xs-3">
										<a class="btn btn-secondary btn-block" id="insCor" style="background-color:<?php echo $corTopo; ?>;" >Aplicar</a>
									</div>	
									
									 
								</form>
							</div>
					</div>

					<div class="panel panel-<?php echo $corPainel; ?>" style="">
						  <div class="panel-heading"><h3>Alterar cor do Rodapé</h3></div>
						  <div class="panel-body">
								<form role=group >
									<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
										<label for="email" >Insira nova cor para seu rodapé</label>	
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<input class="form-control" type="text" id="novaBaseCor"  placeholder="<?php echo $corBase; ?>" alt="Cores do Topo / Rodapé / Menu">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<button type="submit" class="btn btn-secondary btn-block" id="insBaseCor" style="background-color:<?php echo $corBase; ?>;" >Aplicar</button>
									</div>	
									
									 
								</form>
							</div>
					</div>
					
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
										<!--<input class="form-control" type="text" id="novoMenuLat" placeholder="<?php echo $corMenuAdm; ?>"> !-->
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<button type="submit" class="btn btn-secondary btn-block" id="aplCorMenuLat" >Aplicar</button>
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
										<!--<input class="form-control" type="text" id="novoMenuLat" placeholder="<?php echo $corMenuAdm; ?>"> !-->
									</div>
									<div class="col-md-3  col-sm-3 col-xs-3">
										<a class="btn btn-default btn-block "  id="mudaPainel" >Aplicar</a>
									</div>	
									
									 
								</form>
							</div>
					</div>
					
			</div>	

</body>
</html>
