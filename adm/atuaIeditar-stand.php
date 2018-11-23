
<?php
	//include('conect.php');
	ob_start(); 
	@session_start();
	include('globais.php');
	
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	} 
?>



<script>
$(document).ready(function(){
	var conteudopag = jQuery('#conteudopag');
	//var pag1 = $('button#pag1').val();
	$('button#pag1').click(function(){
		alert("clicou 1" );
		conteudopag.load('atualeditar.php');    
    });
	$('button#pag2').click(function(){
		alert("clicou 2");
		conteudopag.load('inicial.php');    
    });
	
	
	});
</script>
<div style="height:20px" class="visible-xs"></div>
<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
    <ol class="breadcrumb">
    <style></style>
        <li><a><p>Atuação</p></a></li>
          <li><a>Editar / Excluir</a></li>
         
    </ol>
</div>

<div class="panel-group">
				
    <div class="panel panel-<?php echo $corPainel; ?>" >
    <div class="panel-heading"><h3>Editar / Excluir</h3></div>
    
    <div class="panel-body">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            
            </div>
                
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"  id="conteudopag">
          <!--   <?php  /*
			echo $_POST.'<br>';
			print_r($_SESSION);
			
			
			$pagInit = $_SESSION['line1'];
			$pagFinal = $_SESSION['line2'];
			
             $selectAtuacao = "SELECT * FROM `atuacao` ORDER BY `atuacao`.`id` DESC LIMIT 0,2";
				$queryAtuacao = mysql_query($selectAtuacao);
										
				while($banco = mysql_fetch_array($queryAtuacao)){
					$atuacaoId = $banco["id"];
					$atuacaoImg = $banco["img"];
					$atuacaoTitulo = $banco["titulo"];
					$atuacaoDescri = $banco["descri"];
					$atuacaoTexto = $banco["texto"];
					$atuacaoData = $banco["data"];
					$atuacaoHora = $banco["hora"];
                                            
            ?>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 at"  style="margin-top:3px">
               
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4" style="border:0px #9933CC solid">
                    <img src="../atuacao/<?php echo $atuacaoId; ?>/img/<?php echo $atuacaoImg; ?>" class="img-rounded img-responsive"  />
                </div>
                
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8"style="border:0px #9933CC solid">
                <span class="spandate"><?php echo $atuacaoData.' '.$atuacaoHora;?></span>
                    <h3><strong> <?php echo $atuacaoTitulo;?><strong></h3>
                    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif"><?php echo $atuacaoDescri;?></p></a>
                    
                </div>
                <div class="row" style="border:0px #9933CC solid">
                   
                    <a href="#" target="_self"><button class="btn btn-default" > <i class="fa fa-trash" aria-hidden="true"></i> Deletar</button></a>
                    <a href="#" target="_self"><button class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a>
                    
                     
                    
                </div>
                 <hr />
             </div>
           <?php  }
            */
        ?> -->
         <!-- Inicio do teste Jpage -->
           
                
                <!-- item container -->
                <ul id="itemContainer">
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    <li><img src="../images/52cdd13bbbd7bbd0ef6ffa6170d82bd0.jpg" alt="image"></li>
                    
                </ul>
                
            
            <!-- navigation panel -->
            <div class="holder">
            <a class="jp-previous jp-disabled">← previous</a>
            <a class="jp-current">1</a>
            <span class="jp-hidden">...</span>
            <a>2</a>
            <a>3</a>
            <a>4</a>
            <a>5</a>
            <a class="jp-hidden">6</a>
            <a class="jp-hidden">7</a>
            <a class="jp-hidden">8</a>
            <a class="jp-hidden">9</a>
            <span>...</span>
            <a>10</a>
            <a class="jp-next">next →</a>
            </div>
         
         
         
         <!-- Nao Deletar -->
         </div>
            </div>
      
    </div>
</div>


