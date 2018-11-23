<?php
	
	                         //include('../conect.php');
	include('globais.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<div style="height:20px" class="visible-xs"></div>
	<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
		<ol class="breadcrumb">
		<li><a>Home</a></li>
			<li><a>Configurações</a></li>
			<li><a>Background</a></li>
		</ol>
	</div>
	
<div class="panel-group">
	<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Altere a cor de fundo do site</h3></div>
				  <div class="panel-body">
						<form role=group >
							<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
								<label for="email" >Insira nova cor para o seu background</label>	
							</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $corTopo; ?>">
						
							</div>
							<div class="col-md-3  col-sm-3 col-xs-3">
								<button type="submit" class="btn btn-secondary btn-block" id="insCor"  >Aplicar</button>
							</div>	
							
							 
						</form>
					</div>
			</div>
			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Insira nova imagem para o fundo do site</h3></div>
				  <div class="panel-body">
						<form role=group >
							<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
								<label for="email" >Insira nova cor para o seu Topo</label>	
							</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $imgBg; ?>">
						
							</div>
							<div class="col-md-3  col-sm-3 col-xs-3">
								<button type="submit" class="btn btn-secondary btn-block" id="insCor"  >Aplicar</button>
							</div>	
							
							 
						</form>
					</div>
			</div>
			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Configurações da imagem de fundo do seu site</h3></div>
				  <div class="panel-body">
							<form role=group >
							
								<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="border:0px dashed #000">
									<label for="pose" >Posição</label><br>	
									<input type="radio" name="pose" value="left">Esquerda<br>
									<input type="radio" name="pose" value="right">Direita<br>
									<input type="radio" name="pose" value="top">Topo<br>
									<input type="radio" name="pose" value="botton">Base
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="border:0px dashed #000">
									<label for="radio" >Repetição</label><br>	
									<input type="radio" name="repete" value="left">Horizontal<br>
									<input type="radio" name="repete" value="right">Vertical<br>
									<input type="radio" name="repete" value="top">Não<br>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="border:0px dashed #000">
								
								<label for="radio" >Tipo</label><br>	
								<label class="checkbox-inline"><input type="radio" value="fixado">Fixado</label><br>
								<label class="checkbox-inline"><input type="radio" value="scrol">Scrol</label>
								
								</div>
								
								<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="border:0px dashed #000"><br><br><br><br>
								<a class="btn btn-info btn-block">Aplicar</a>
								</div>
									
								
								
								 
							</form>
						
					</div>
			</div>
			
</div>
	
	<!--
	<div class="panel-group">
			<div class="panel panel-default" style="">
				<div class="panel-heading"><h3>Altere a cor de fundo</h3></div>

				<ul class="list-group">
					<li class="list-group-item" >
						<div class="row">
							<form role=group >
								<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
									<label for="email" >Insira nova cor para o seu background</label>	
								</div>
								<div class="col-md-5 col-sm-5 col-xs-5">
									<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $corTopo; ?>">
							
								</div>
								<div class="col-md-3  col-sm-3 col-xs-3">
									<button type="submit" class="btn btn-secondary  " id="insCor" style="background-color:<?php echo $corTopo; ?>;" >Aplicar</button>
								</div>	
							</form>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="panel panel-default" style="">
				<div class="panel-heading"><h3>Background color</h3></div>

				<ul class="list-group">
					<li class="list-group-item" >
						<div class="row">
							<form role=group >
								<div class="col-md-4 col-sm-4 col-xs-4 form-group" >
									<label for="email" >Insira nova cor para o seu background</label>	
								</div>
								<div class="col-md-5 col-sm-5 col-xs-5">
									<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $corTopo; ?>">
							
								</div>
								<div class="col-md-3  col-sm-3 col-xs-3">
								
								</div>	
							</form>
						</div>
					</li>
					<li class="list-group-item">	
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4 " > </div>
							<div class="col-md-5 col-sm-5 col-xs-5" style="border:1px #000 dashed">
							vone
							</div>
							<div class="col-md-3  col-sm-3 col-xs-3" style="border:1px #000 dashed">
								<button type="submit" class="btn btn-secondary  " id="insCor" style="background-color:<?php echo $corTopo; ?>;" >Aplicar</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
		
		


		
	</div>


<p style="margin-top:-10px"> Configuração <strong style="font-size:20px">Background</strong></p>

<hr style="margin-top:-20px">
<div style="width:auto;height:220px;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(251,251,251,0.75);padding:10px">
<div style="float:left"><p style="margin-top:5px">Background imagem <strong style="font-size:20px">atual</strong></p></div>
<div style="margin-right:115px;width:auto;height:auto;border:rgba(0,0,0,.50) 1px dotted;float:right;">

  <img src="../img/bg.png" width="200" height="" alt="" /> </div>

</div>


  <div style="width:auto;height:65px;;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(251,251,251,0.75);padding:10px;margin-top:2px;">
<div style="float:left"><p style="margin-top:5px">Insira novo background para o <strong style="font-size:20px">site</strong></p></div>
<div style="margin-right:0px;width:auto;height:auto;border:rgba(0,0,0,.50) 0px dotted;float:right;">
<form action="pagina_principal.php" method="POST" name="consulta" >
    
      <span><input type="text" id="titulo" style="display:inline;border:rgba(0,0,0,.50) 0px dotted;margin-top:0px;padding:20px" placeholder="*.jpg / *.png "> </span>
      <span style="margin-left:10px"><input type="submit" value="Aplicar" class="ui-btn" id="prodIns" style="float:right;display:flex;border:rgba(0,0,0,.50) 0px dotted;"></span>

</form>
</div>

</div>
<hr>
!-->
</body>
</html>
