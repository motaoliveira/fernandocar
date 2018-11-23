<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	include('conect.php');
	include('globais.php');
	
	
?>
<script>

$(document).ready(function(){
    $("#enviar").click(function(){
		
		var novoTit = $('#novoTitulo').val();		
		$.post("insTitulo.php", { novoTit:novoTit },function(get_retorno) {
		  alert(get_retorno);
		    });
    });

 $("#enviaBase").click(function(){
		
		var novoTit = $('#insRodape').val();		
		$.post("insBase.php", { novoTit:novoTit },function(get_retorno) {
		  alert(get_retorno);
		    });
    });

});
</script>
<div style="height:20px" class="visible-xs"></div>
	<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
		<ol class="breadcrumb">
			<li><p>Configurações</p></li>
			<li><a>Topo / Rodapé</a></li>
		</ol>
	</div>
	<div class="panel-group">
			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Altere novo título para o site</h3></div>
				  <div class="panel-body">
						<form role=group >
							<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
								<label for="email" >Insira nova texto para o seu título</label>	
							</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<input class="form-control theme-secondary" type="text" id="novaCor"  placeholder="<?php echo $tituloSite; ?>">
						
							</div>
							<div class="col-md-3  col-sm-3 col-xs-3">
								<button type="submit" class="btn btn-secondary btn-block" id="insCor" >Aplicar</button>
							</div>	
							
							 
						</form>
					</div>
			</div>
			
			<div class="panel panel-<?php echo $corPainel; ?>" style="">
				  <div class="panel-heading"><h3>Alterar suas inforações de rodapé</h3></div>
				  <div class="panel-body">
						<form role=group >
							<div class="col-md-4 col-sm-4 col-xs-4 form-group" style="border:0px #000 dashed;>
								<label for="email" >Insira novo texto para o rodapé</label>	
							</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<input class="form-control theme-secondary " type="text" id="novaCor"  placeholder="<?php echo $textRodape; ?>">
						
							</div>
							<div class="col-md-3  col-sm-3 col-xs-3">
								<button type="submit" class="btn btn-secondary btn-block " id="insCor"  >Aplicar</button>
							</div>	
							
							 
						</form>
					</div>
			</div>
			</div>
		
		


		
	</div>

<!--<p style="margin-top:-10px"> Configuração <strong style="font-size:20px">Título</strong></p>
<hr style="margin-top:-20px">
  <div style="width:auto;height:33px;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(251,251,251,0.75);padding:10px">
<div style="float:left"><p style="margin-top:5px">Título atual do site é: "<strong style="font-size:20px"><?php echo $tituloSite ?></strong>"</p></div>
</div>
  <div style="width:auto;height:65px;;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(251,251,251,0.75);padding:10px;margin-top:2px;">
<div style="float:left"><p style="margin-top:5px">Insira novo título para o <strong style="font-size:20px">site</strong></p></div>
<div style="margin-right:0px;width:auto;height:auto;border:rgba(0,0,0,.50) 0px dotted;float:right;">

<form action="" id="titulo">
      <span><input id="novoTitulo" type="text"  style="display:inline;border:rgba(0,0,0,.50) 0px dotted;margin-top:0px;padding:20px"  placeholder="Novo titulo para o site" x-webkit-speech> </span><span style="margin-left:10px">
      <input id="enviar" type="submit" value="Aplicar" class="ui-btn"  style="float:right;display:flex;border:rgba(0,0,0,.50) 0px dotted;"></span>
</form>

</div>

</div>

<hr>

<p style="margin-top:0px"> Configuração <strong style="font-size:20px">Rodapé</strong></p>

<hr style="margin-top:-20px">
  <div style="width:auto;height:33px;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(251,251,251,0.75);padding:10px">
<div style="float:left"><p style="margin-top:5px">Texto do rodapé: "<strong style="font-size:20px"><?php echo $textRodape ?></strong>"</p></div>


</div>


  <div style="width:auto;height:65px;;border:rgba(0,0,0,.50) 0px dashed;background-color:rgba(223,223,223,0.65);padding:10px;margin-top:2px;border:1px solid rgba(223,223,223,0.90)">
<div style="float:left;border:1px solid #000000 ;margin-left:10px;width:auto;"><p style="margin-top:5px">Insira texto para o <strong style="font-size:20px">rodapé</strong></p></div>
<div style="margin-right:0px;width:auto;height:auto;border:rgba(0,0,0,.50) 0px dotted;float:right;">
<form action="" name="rodape" id="rodape">
    
      <span><input type="text" id="insRodape" style="display:inline;border:rgba(0,0,0,.50) 0px dotted;margin-top:0px;padding:20px;" placeholder="Texto do rodapé"> </span>
      <span style="margin-left:10px"><input type="submit" value="Aplicar" class="ui-btn" id="enviaBase" style="float:right;display:flex;border:rgba(0,0,0,.50) 0px dotted;" x-webkit-speech></span>

</form>
</div>

</div>

<hr>
!-->

</body>
</html>
