<?php

	include('protect.php');
	include('conect.php');
	@$id = $_POST['id'];
	if(@$_POST['id']){
	mysql_query("UPDATE `edicao` SET `imagens` = '$id' WHERE `edicao`.`id` = 1;"); }
	else{
	$sql = "SELECT * FROM `edicao` WHERE `id`=1";
	$query = mysql_query($sql);
	
	while ($banco = mysql_fetch_assoc($query))
	{
	
	
	$atuacaoId = $banco['imagens'];}
	
	include('globais.php');
	
	if($corMenuAdm=="secundary"){
	$corMenuAdm = "default";
	} 
?>

<script src="tinymce/js/tinymce/tinymce.js"></script>
<script>
tinymce.init({
  selector: 'textarea',
  //images_upload_url: 'postAcceptor.php',
  //images_upload_base_path: '/some/basepath',
  //images_upload_credentials: true,
  height: 400,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});
</script>

<script>
$(document).ready(function(){
	 $("#sendAtua").click(function()
			{
			alert("Verifique se todos os campos estão corretamente preenchidos");
			/* var tinyMce = tinyMCE.get('mensagem').getContent();	
			var titulo = $('#titulo').val();		
			var descricao = $('#descricao').val();
			var mensage = $('#tex').val();
			var arq2 = $('#exemplo').val();
			if(titulo =="" || descricao=="" || mensage=="" || arq2==""){
				alert("Verifique se todos os campos estão corretamente preenchidos"); 
			}
			else
			{
			//$.post("atuacao_ins.php", { titulo1:titulo , descricao1:descricao, mensage1:mensage, arq:arq2},				function(get_retorno) {alert(get_retorno);
							 // });
				alert('Tudo preenchido corretamente');
			}*/
			});
	  });
</script>

            
                
<?php
		
	$sq = "SELECT * FROM `galeria` WHERE `id`=$atuacaoId";
	$quer = mysql_query($sq);
				while($db = mysql_fetch_assoc($quer)){
						
					$id_db 		=	$db['id'];
					$img_db		=	$db['img'];
					$titulo_db	=	$db['titulo'];
					$descri_db	=	$db['descri'];
					$texto_db	=	$db['texto'];
					$data_db	=	$db['data'];
					$hora_db	=	$db['hora'];
						
			?>              
				<div class="w-50">
                  <img class="img-fluid" src="../galeria/<?php echo $id_db; ?>/img/<?php echo $img_db; ?>" />
                  </div>
    <div class="col-12" >
			
				<form role="form" action="galerhead_update.php" enctype="multipart/form-data" method="post">
					<br>
					<input class="form-group" name="hide" type="hidden" value="<?php echo $atuacaoId ?>" />
					<div class="col-12 form-group" style="border:0px #000 dashed;">
					
					<label >Titulo</label> 
					<input class="form-control theme-secondary" type="text" id="titulo"  placeholder="" name="titulo" value="<?php echo $titulo_db; ?>">
				
					
					<label >Imagem: 400 x 227 px:</label> 
							<input type="file" name="exemplo" class="btn btn-secondary btn-block "  id="arq">
						
				   	<label >Descrição:</label> 
						<input class="form-control theme-secondary" type="text" id="descricao"  placeholder="" name="descricao" value="<?php echo $descri_db; ?>">
				
					
					
				
					<br />
						
							<button type="submit" class="btn btn-primary" id="sendAtua">
								<span class="glyphicon glyphicon-ok"></span> Enviar
							</button>
					</div> 	
				
				
				</form>
			
	</div>
				   
			 
					 <?php
				} 
	
	}	
	?>
