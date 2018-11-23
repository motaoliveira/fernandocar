<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	//include('conect.php');
	include('globais.php');
	
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	} 
?>

<script>
$(document).ready(function(){
	
	 $("#fixob").click(function(){
		
		var linkbaner2 = $('#link').val();		
		var carousel_ins2 = $('#carousel_ins').val();
		var arq2 = $('#arq').val();
		$.post("fixo_ins.php", { linkbaner:linkbaner2 , carousel:carousel2, arq:arq2},function(get_retorno) {
		  alert(get_retorno);
		   });
    });
	
	
	
	  });
</script>
    <div style="height:20px" class="visible-xs"></div>
    <div class="junbotrom" style="margin-top:-20px;height:65px;">
        <ol class="breadcrumb">
        <li><a>Banner</a></li>
        <li><a>Fixo da Interno</a></li>
        </ol>
    </div>
    <div class="panel-group">
        
    <div class="panel panel-<?php echo $corPainel; ?>" style="">
	<div class="panel-heading"><h3>Fixo Interno</h3></div>
    <div class="panel-body">
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <!-- <a href="#"><img class="responsive img-thumbnail" src="../img/produto-sem-imagem.gif"></a> -->            
    <form role="form" action="fixoint_ins.php" enctype="multipart/form-data" method="post">
<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8 form-group">
    <p>Baner Fixo Interno ao site - Tamanho: 1450 x 110 px</p>
</div>
						
							
         <div class="col-md-4  col-lg-4 col-sm-4 col-xs-4">
        <select class="form-control input-md" id="carousel_ins" name="carousel" >
        
		<?php 
                $categori2 ="SELECT * FROM `bannerfixoint`";
                
                $actioQuery2 = mysql_query($categori2);
                
                while($act2 = mysql_fetch_array($actioQuery2)){
                    $idact2 = $act2['id'];
                    $nomeact2 = $act2['baner'];
                    $imgact2 = $act2['img'];
                    $linkact2 = $act2['link'];
                    $ordemkact2 = $act2['ordem'];
                    
        ?>		
        <option value="<?php echo $nomeact2; ?>" style="background-color:#999;color:#FFF"><?php echo $nomeact2; ?></option>
        <?php
        }
        
        ?>
                    </select>
        </div>
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <br class="visible-sm visible-xs">
                <div class="form-group">
                    <input type="file" name="exemplo" class="btn btn-default btn-block " id="arq">
                </div>
            </div>
           <div class="col-md-5  col-lg-5 col-sm-4 col-xs-4 form-group">
                <input class="form-control theme-secondary" type="text" id="link"  placeholder="Insira o link do Banner" name="link" value="">
        
            </div>
            <div class="col-md-4  col-lg-4 col-sm-4 col-xs-4 form-group">
              <p>
                    <label>
                    <input type="checkbox" name="window" value="_blank" id="window_1" />
                    Nova Janela</label>	
                  <br />
              </p>
            </div>
            <div class="col-md-2  col-lg-2 col-sm-4 col-xs-4">
            <br class="visible-sm visible-xs">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendBanner">
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



<div class="panel-group" style="margin-top:10px;">	
				
<div class="panel panel-<?php echo $corPainel; ?>">
                
                
				<div class="panel-heading"><h3>Imagens dos Banner's</h3></div>

				 <div class="panel-body">
<?php 
											$categori ="SELECT * FROM `bannerfixoint`";
											
											$actioQuery = mysql_query($categori);
											
											while($act = mysql_fetch_array($actioQuery)){
												$idact = $act['id'];
												$nomeact = $act['baner'];
												$imgact = $act['img'];
												$linkact = $act['link'];
												$ordemkact = $act['ordem'];
									if(!$imgact){}else{
									?>		
                                    
			<div class="col-md-12  col-lg-4 col-sm-12 col-xs-12" style="margin-top:20px">
            <a href="<?php echo $linkact; ?>" target="_blank">
            <img class="img-responsive" src="../images/<?php echo $imgact; ?>" />
            </a>
           <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2" style="margin-top:10px">
            <a class="btn btn-default disabled"><?php echo $nomeact[8]; ?></a>
            </div>
            <div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" style="margin-top:10px">
            <a class="btn btn-default disabled"><?php echo $linkact; ?></a>	
            </div>
            </div>
									<?php
									}
											}
									
									?>
									</div>
            </div>
</div>
