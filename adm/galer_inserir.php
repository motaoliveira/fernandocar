<?php

	include('protect.php');
	include('conect.php');
	@$id = $_POST['id'];
	
	//print_r($_POST);
	if(@$_POST['id']){
	mysql_query("UPDATE `edicao` SET `imagens` = '$id' WHERE `edicao`.`id` = 1;");} 
	else{
	//echo "carregue a id ";	
	$sql = "SELECT * FROM `edicao` WHERE `id`=1";
	$query = mysql_query($sql);
	
	while ($banco = mysql_fetch_assoc($query))
	{
	//echo "entrou aqui";
	
		$pasta = $banco['imagens'];}
		// echo $pasta;
	}
		 ?>
         
         <div class="form-group" >
         <?php 
		 	$sql2 = "SELECT * FROM `galeria` WHERE `id`=$pasta";
			$query2 = mysql_query($sql2);
			
			while ($banco = mysql_fetch_assoc($query2))
			{
			//echo "entrou aqui";
			
				$galerianome = $banco['titulo'];
				 //echo $galerianome;
			}
				 ?>
         <h2 align="left">Galeria: <?php echo $galerianome; ?></h2>
			
      
         <hr />
         <form role="form" action="galer_upload.php" enctype="multipart/form-data" method="post">
         <input name="pasta" type="hidden" value="<?php echo $pasta; ?>" />
         <span class="col-5"><input class="btn btn-default" name="img[]" type="file" multiple="multiple" /></span>
         					<span class="col-7"><button type="submit" class="btn btn-primary" name="upload" value="upload" >
								<span class="glyphicon glyphicon-ok"></span> Enviar
							</button></span>
						</div>
                        
         </form>
         <hr />
         <br />
         <div  class="col-12">
         <h2 align="left">Imagens da Galeria</h2>
         <hr />
		  <div  class="row">
         	 <?php 
			
			$dir = "../galeria/$pasta/fotos";
			$tudo = @scandir($dir);
			$arquivos = @array_slice($tudo, 2);
			$qdt = count($arquivos);
			//var_dump($arquivos);
			 
			 $arquivos = @array_map('utf8_encode', $arquivos);
?>
			
			<?php
			//echo $qdt;
			if($qdt){
				?>
          <link href="../src/css/lightbox.css" rel="stylesheet">
          <script src="../src/js/lightbox.js"></script>
          
                <?php
			for($i=0; $i<$qdt; $i++){
				
			?>
         <div class="col-3" style="padding:3px;">
           <a href="../galeria/<?php echo $pasta; ?>/fotos/<?php echo @$arquivos[$i]; ?>" data-lightbox="galeria">
		   <img class="img-fluid img-thumbnail" src="../galeria/<?php echo $pasta; ?>/fotos/<?php echo @$arquivos[$i]; ?>"  align="left"  class="img-responsive" style="margin:2px; margin-top:0px;"/></a>
            <button class="btn btn-secondary btn-block del" value="<?php echo @$arquivos[$i]; ?>" >Deletar</button>
             </div>
			<?php } //echo $atuacaoTexto;
			
			 ?>
      <script type="text/javascript">
$(document).ready(function(){
       $('.lightbox').hide();
		
});

	$(".del").click(function(){
		   //e.preventDefault();
		   var name = $(this).val();
		   var pasta = "<?php echo $pasta ?>";
		   // alert(name);
			//$("#links").load("atua_edite.php");
			//$.get('atua_edite.php', {id:1 , file:2},function(get_retorno) {
		  //alert(get_retorno);
		 //});
		  //	alert(id);
			 $.post("galer_delimg.php",
				{	
					pasta:pasta,
					name:name,
					
				},
				//function(data, status){
					function(get_retorno) {
				//alert(get_retorno);
					$("#links").load("galer_inserir.php");
					//$('#paging_button').hide();
				}); 
				
		   });

       </script>
         </div>
<?php 	}else{
	echo "Nenhuma imagem encontrada";
	
	}		
	?>
