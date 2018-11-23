<?php

	include('protect.php');
	include('conect.php');
	@$id = $_POST['id'];
	if(@$_POST){
	mysql_query("UPDATE `edicao` SET `atuacao` = '$id' WHERE `edicao`.`id` = 1;"); }
	else{
	//echo "carregue a id ";	
	$sql = "SELECT * FROM `edicao` WHERE `id`=1";
	$query = mysql_query($sql);
	
	while ($banco = mysql_fetch_assoc($query))
	{
	//echo "entrou aqui";
	
		$atuacaoId = $banco['atuacao'];}
		 //echo $atuacaoId;
		 
		 ?>
         
<?php
	//include('conect.php');
	include('globais.php');
	/*echo $corMenuAdm;*/ 
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
		
	$sq = "SELECT * FROM `atuacao` WHERE `id`=$atuacaoId";
		$quer = mysql_query($sq);
	while($db = mysql_fetch_assoc($quer)){
			
		$id_db 		=	$db['id'];
		$img_db		=	$db['img'];
		$titulo_db	=	$db['titulo'];
		$descri_db	=	$db['descri'];
		$texto_db	=	$db['texto'];
		$data_db	=	$db['data'];
		$hora_db	=	$db['hora'];
			
?>   <div class="row">         
     <div class="col">
		<img class="img-fluid" src="../atuacao/<?php echo $id_db; ?>/img/<?php echo $img_db; ?>" />
	  </div>
	  <div class="col"><br><h4>Tamanho padrão a imagem.</h4>
		<p>Imagem: 400 x 227 px</p>
	  </div>
	</div>
    
    <form role="form" action="atuacao_update.php" enctype="multipart/form-data" method="post">
    
	<div class="col">
		<input name="hide" type="hidden" value="<?php echo $atuacaoId ?>" />
        <input class="form-control theme-secondary" type="text" id="titulo"  placeholder="" name="titulo" value="<?php echo $titulo_db; ?>">
    </div>
    
        <div class="col">
            <div class="form-group">
                <input type="file" name="exemplo" class="btn btn-default btn-block "  id="arq">
            </div>
        </div>
        
	 
       <div class="col form-group">
            <input class="form-control theme-secondary" type="text" id="descricao"  placeholder="" name="descricao" value="<?php echo $descri_db; ?>">
    
        </div>
        <div class="col" style="height:auto;">
        <textarea name="tex" id="tex" cols="90" rows="12" ><?php echo $texto_db; ?></textarea>
        </div>
        
        <div class="col">
        <br />
            <div class="form-group" >
                <button type="submit" class="btn btn-primary" id="sendAtua">
                    <span class="glyphicon glyphicon-ok"></span> Enviar
                </button>
            </div>
        </div>
    
    </form>

    
       
 
         <?php
	} 
	
	}	
	?>
